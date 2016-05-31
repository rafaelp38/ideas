<?php

namespace APIRestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('APIRestBundle:Default:index.html.twig');
    }
}
