<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/the')) {
            // themes_homepage
            if (rtrim($pathinfo, '/') === '/thethemes') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'themes_homepage');
                }

                return array (  '_controller' => 'ThemesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'themes_homepage',);
            }

            // community_homepage
            if (rtrim($pathinfo, '/') === '/thecommunities') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'community_homepage');
                }

                return array (  '_controller' => 'CommunityBundle\\Controller\\DefaultController::indexAction',  '_route' => 'community_homepage',);
            }

            // ideas_homepage
            if (rtrim($pathinfo, '/') === '/theideas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ideas_homepage');
                }

                return array (  '_controller' => 'IdeasBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ideas_homepage',);
            }

        }

        // api_rest_insertBdd
        if ($pathinfo === '/insertBdd') {
            return array (  '_controller' => 'APIRestBundle\\Controller\\DefaultController::indexAction',  '_route' => 'api_rest_insertBdd',);
        }

        // api_rest_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'api_rest_home');
            }

            return array (  '_controller' => 'APIRestBundle\\Controller\\IdeaController::indexAction',  'page' => 1,  '_route' => 'api_rest_home',);
        }

        // api_rest_view
        if (0 === strpos($pathinfo, '/idea') && preg_match('#^/idea/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_view')), array (  '_controller' => 'APIRestBundle\\Controller\\IdeaController::viewAction',));
        }

        // api_rest_add
        if ($pathinfo === '/add') {
            return array (  '_controller' => 'APIRestBundle\\Controller\\IdeaController::addAction',  '_route' => 'api_rest_add',);
        }

        // api_rest_edit
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_edit')), array (  '_controller' => 'APIRestBundle\\Controller\\IdeaController::editAction',));
        }

        // api_rest_delete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_rest_delete')), array (  '_controller' => 'APIRestBundle\\Controller\\IdeaController::deleteAction',));
        }

        // api_rest_addUser
        if ($pathinfo === '/addUser') {
            return array (  '_controller' => 'APIRestBundle\\Controller\\UserController::addAction',  '_route' => 'api_rest_addUser',);
        }

        // api_rest_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'APIRestBundle\\Controller\\UserController::loginAction',  '_route' => 'api_rest_login',);
        }

        // api_rest_signup
        if ($pathinfo === '/signup') {
            return array (  '_controller' => 'APIRestBundle\\Controller\\UserController::signupAction',  '_route' => 'api_rest_signup',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
