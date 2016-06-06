<?php

namespace APIRestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use APIRestBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        /*$user = new User();
        $user2 = new User();
        $user3 = new User();

        $user->setNom('PIRES');
        $user->setPrenom('Rafael');
        $user->setNaissance(new \DateTime('09-03-1994'));
        $user->setEmail('rafaelpires38@gmail.com');
        $user->setPassword('toto');
        $user->setPseudo('rafaelp38');

        $user2->setNom('MAKOUF');
        $user2->setPrenom('Yani');
        $user2->setNaissance(new \DateTime('10-06-1994'));
        $user2->setEmail('yani.m89@gmail.com');
        $user2->setPassword('Yani');
        $user2->setPseudo('YaniMakouf');

        $user3->setNom('RUBIO BELANDO');
        $user3->setPrenom('Nicolas');
        $user3->setNaissance(new \DateTime('09-03-1994'));
        $user3->setEmail('nicolas_rb_93@hotmail.fr');
        $user3->setPassword('Nico');
        $user3->setPseudo('Laios');

        //$em->persist($user);
        $em->persist($user2);
        $em->persist($user3);

        $em->flush();*/

        //var_dump($user);


        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('APIRestBundle:User')
        ;

        $listUsers = $repository->findAll();

        //var_dump($listUsers);

        /*foreach ($listUsers as $user) {
            // $advert est une instance de Idea
            echo $user->getContent();
        }*/

        return $this->render('APIRestBundle:Default:index.html.twig', array(
            'listUsers'           => $listUsers
        ));


    }
}
