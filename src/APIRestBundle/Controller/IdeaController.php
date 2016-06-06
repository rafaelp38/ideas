<?php

namespace APIRestBundle\Controller;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use APIRestBundle\Entity\Idea;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;


class IdeaController extends Controller
{

    public function indexAction($page)
    {
        // On ne sait pas combien de pages il y a
        // Mais on sait qu'une page doit être supérieure ou égale à 1
        if ($page < 1) {
            // On déclenche une exception NotFoundHttpException, cela va afficher
            // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
            throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
        }

        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('APIRestBundle:Idea')
        ;

        $listIdeas = $repository->findAll();


        // Ici, on récupérera la liste des annonces, puis on la passera au template
        // Mais pour l'instant, on ne fait qu'appeler le template
        return $this->render('APIRestBundle:Idea:index.html.twig', array(
            'listIdeas' => $listIdeas
        ));
    }


    public function viewAction($id)
    {

        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('APIRestBundle:Idea')
        ;

        $idea = $repository->find($id);
        

        return $this->render('APIRestBundle:Idea:view.html.twig', array(
            'idea' => $idea
        ));
    }


    public function addAction(Request $request)
    {
        // On crée un objet Idea
        $idea = new Idea();
        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $idea);
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
            ->add('dateDepot', DateType::class)
            ->add('title', TextType::class)
            ->add('text', TextareaType::class)
            ->add('save', SubmitType::class);
        // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard
        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();
        // On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('APIRestBundle:Idea:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    public function editAction($id, Request $request)
    {
        // Ici, on récupérera l'annonce correspondante à $id
        // Même mécanisme que pour l'ajout
        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Idée bien modifiée.');
            return $this->redirectToRoute('api_rest_view', array('id' => 5));
        }
        $idea = array(
            'title'   => 'Recherche développpeur Symfony2',
            'id'      => $id,
            'author'  => 'Alexandre',
            'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
            'date'    => new \Datetime()
        );

        return $this->render('APIRestBundle:Idea:edit.html.twig', array(
            'idea' => $idea
        ));
    }


    public function menuAction()
    {
        // On fixe en dur une liste ici, bien entendu par la suite
        // on la récupérera depuis la BDD !
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('APIRestBundle:Idea')
        ;

        $listIdeas = $repository->findAll();

        return $this->render('APIRestBundle:Idea:menu.html.twig', array(
            // Tout l'intérêt est ici : le contrôleur passe
            // les variables nécessaires au template !
            'listIdeas' => $listIdeas
        ));

    }


    public function deleteAction($id)
    {

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $idea = $em->find('APIRestBundle:Idea', $id);

        if (null === $idea) {
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

        $em->remove($idea);

        // Pour persister le changement dans la relation, il faut persister l'entité propriétaire
        // Ici, Advert est le propriétaire, donc inutile de la persister car on l'a récupérée depuis Doctrine

        // On déclenche la modification
        $em->flush();


        // Ici, on récupérera l'annonce correspondant à $id
        // Ici, on gérera la suppression de l'annonce en question
        return $this->render('APIRestBundle:Idea:delete.html.twig');
    }

}