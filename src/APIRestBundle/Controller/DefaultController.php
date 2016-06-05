<?php

namespace APIRestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use APIRestBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $user = new User();

        $user->setNom('PIRES');
        $user->setPrenom('Rafael');
        $user->setNaissance(new \DateTime('09-03-1994'));
        $user->setEmail('rafaelpires38@gmail.com');
        $user->setPassword('toto');
        $user->setPseudo('rafaelp38');

        $em->persist($user);

        $em->flush();

        var_dump($user);

        return $this->render('APIRestBundle:Default:index.html.twig', array(
            'name'           => $user->getNom()
        ));


    }
}
