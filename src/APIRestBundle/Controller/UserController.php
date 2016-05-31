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
        try{
                $idUser = $user->getId();
                $date = new \DateTime();

                return new JsonResponse($date);

            }else{
                return new JsonResponse('Erreur');
            }
        }catch(Exception $ex) {
            return new JsonResponse('Erreur');
        }
    }
}
