<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/student')) {
            // just_student_index
            if (rtrim($pathinfo, '/') === '/student') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'just_student_index');
                }

                return array (  '_controller' => 'JustBundle\\Controller\\StudentController::indexAction',  '_route' => 'just_student_index',);
            }

            if (0 === strpos($pathinfo, '/studenttype')) {
                // studenttype_index
                if (rtrim($pathinfo, '/') === '/studenttype') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_studenttype_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'studenttype_index');
                    }

                    return array (  '_controller' => 'JustBundle\\Controller\\StudentTypeController::indexAction',  '_route' => 'studenttype_index',);
                }
                not_studenttype_index:

                // studenttype_new
                if ($pathinfo === '/studenttype/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_studenttype_new;
                    }

                    return array (  '_controller' => 'JustBundle\\Controller\\StudentTypeController::newAction',  '_route' => 'studenttype_new',);
                }
                not_studenttype_new:

                // studenttype_show
                if (preg_match('#^/studenttype/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_studenttype_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'studenttype_show')), array (  '_controller' => 'JustBundle\\Controller\\StudentTypeController::showAction',));
                }
                not_studenttype_show:

                // studenttype_edit
                if (preg_match('#^/studenttype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_studenttype_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'studenttype_edit')), array (  '_controller' => 'JustBundle\\Controller\\StudentTypeController::editAction',));
                }
                not_studenttype_edit:

                // studenttype_delete
                if (preg_match('#^/studenttype/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_studenttype_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'studenttype_delete')), array (  '_controller' => 'JustBundle\\Controller\\StudentTypeController::deleteAction',));
                }
                not_studenttype_delete:

            }

        }

        // bunker_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'bunker_default_index');
            }

            return array (  '_controller' => 'BunkerBundle\\Controller\\DefaultController::indexAction',  '_route' => 'bunker_default_index',);
        }

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

        if (0 === strpos($pathinfo, '/creaturefantastique')) {
            // app_creaturefantastique_index
            if (rtrim($pathinfo, '/') === '/creaturefantastique') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_creaturefantastique_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CreatureFantastiqueController::indexAction',  '_route' => 'app_creaturefantastique_index',);
            }

            // app_creaturefantastique_show
            if (0 === strpos($pathinfo, '/creaturefantastique/show') && preg_match('#^/creaturefantastique/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_creaturefantastique_show')), array (  '_controller' => 'AppBundle\\Controller\\CreatureFantastiqueController::showAction',));
            }

            // app_creaturefantastique_new
            if ($pathinfo === '/creaturefantastique/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\CreatureFantastiqueController::newAction',  '_route' => 'app_creaturefantastique_new',);
            }

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
