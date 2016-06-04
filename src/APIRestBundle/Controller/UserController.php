<?php

namespace APIRestBundle\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\Config\Definition\Exception\Exception;
//use Symfony\Component\HttpFoundation\JsonResponse;
use APIRestBundle\Entity\User;
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
}
