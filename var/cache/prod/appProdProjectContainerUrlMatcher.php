<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/chevalier')) {
            // chevalier_index
            if (rtrim($pathinfo, '/') === '/chevalier') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_chevalier_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'chevalier_index');
                }

                return array (  '_controller' => 'JustBundle\\Controller\\ChevalierController::indexAction',  '_route' => 'chevalier_index',);
            }
            not_chevalier_index:

            // chevalier_new
            if ($pathinfo === '/chevalier/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_chevalier_new;
                }

                return array (  '_controller' => 'JustBundle\\Controller\\ChevalierController::newAction',  '_route' => 'chevalier_new',);
            }
            not_chevalier_new:

            // chevalier_show
            if (preg_match('#^/chevalier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_chevalier_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chevalier_show')), array (  '_controller' => 'JustBundle\\Controller\\ChevalierController::showAction',));
            }
            not_chevalier_show:

            // chevalier_edit
            if (preg_match('#^/chevalier/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_chevalier_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chevalier_edit')), array (  '_controller' => 'JustBundle\\Controller\\ChevalierController::editAction',));
            }
            not_chevalier_edit:

            // chevalier_delete
            if (preg_match('#^/chevalier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_chevalier_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chevalier_delete')), array (  '_controller' => 'JustBundle\\Controller\\ChevalierController::deleteAction',));
            }
            not_chevalier_delete:

        }

        // just_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'just_homepage');
            }

            return array (  '_controller' => 'JustBundle\\Controller\\DefaultController::indexAction',  '_route' => 'just_homepage',);
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
