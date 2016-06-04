<?php

namespace APIRestBundle\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\Config\Definition\Exception\Exception;
//use Symfony\Component\HttpFoundation\JsonResponse;
use ApiBundle\Entity\User;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\HttpFoundation\Request;


class CommentController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
    }
}
