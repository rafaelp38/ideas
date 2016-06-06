<?php

namespace APIRestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
//use Symfony\Component\Config\Definition\Exception\Exception;
//use Symfony\Component\HttpFoundation\JsonResponse;
use APIRestBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\PasswordEncoder;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\HttpFoundation\Request;


class UserController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        //$birthday = "11-11-1990";

        $user = new User();

        $user->setNom('PIRES');
        $user->setPrenom('Rafael');
        $user->setNaissance(new \DateTime('09-03-1994'));
        $user->setEmail('rafaelpires38@gmail.com');
        $user->setPassword('toto');
        $user->setPseudo('rafaelp38');

    }


    public function addAction(Request $request)
    {
        // On crée un objet Idea
        $user = new User();
        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $user);
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
            ->add('nom', DateType::class)
            ->add('prenom', TextType::class)
            ->add('naissance', TextareaType::class)
            ->add('email', TextType::class)
            ->add('pseudo', TextType::class)
            ->add('password', TextType::class)
            ->add('save', SubmitType::class);
        // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard
        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();
        // On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('APIRestBundle:User:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    public function signupAction(Request $request)
    {
        // On crée un objet Idea
        $user = new User();
        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $user);
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('naissance', DateType::class)
            ->add('email', EmailType::class)
            ->add('pseudo', TextType::class)
            ->add('password', PasswordType::class)
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

    public function loginAction(Request $request)
    {
        // On crée un objet Idea
        $user = new User();
        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $user);
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
            ->add('pseudo', TextType::class)
            ->add('password', PasswordType::class)
            ->add('Connexion', SubmitType::class);
        // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard
        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();
        // On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('APIRestBundle:Idea:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
