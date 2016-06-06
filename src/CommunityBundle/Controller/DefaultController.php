<?php

namespace CommunityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('APIRestBundle:Community')
        ;

        $listCommunity = $repository->findAll();

        //var_dump($listUsers);

        /*foreach ($listUsers as $user) {
            // $advert est une instance de Idea
            echo $user->getContent();
        }*/

        return $this->render('CommunityBundle:Default:listCommunauties.html.twig', array(
            'listCommunity'           => $listCommunity
        ));
    }
}
