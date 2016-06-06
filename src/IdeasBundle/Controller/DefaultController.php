<?php

namespace IdeasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IdeasBundle:Default:index.html.twig');
    }
}
