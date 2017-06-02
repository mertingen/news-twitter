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

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/keyword')) {
            // keyword-list
            if ($pathinfo === '/keyword/list') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_keywordlist;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\KeywordController::listAction',  '_route' => 'keyword-list',);
            }
            not_keywordlist:

            // keyword-get
            if ($pathinfo === '/keyword/get') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_keywordget;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\KeywordController::getDataAction',  '_route' => 'keyword-get',);
            }
            not_keywordget:

            // keyword-add
            if ($pathinfo === '/keyword/add') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_keywordadd;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\KeywordController::addAction',  '_route' => 'keyword-add',);
            }
            not_keywordadd:

            // keyword-post-add
            if ($pathinfo === '/keyword/postAdd') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_keywordpostadd;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\KeywordController::postAddAction',  '_route' => 'keyword-post-add',);
            }
            not_keywordpostadd:

            // keyword-edit
            if (0 === strpos($pathinfo, '/keyword/edit') && preg_match('#^/keyword/edit/(?P<keywordId>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_keywordedit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keyword-edit')), array (  '_controller' => 'AppBundle\\Controller\\KeywordController::editAction',));
            }
            not_keywordedit:

            // keyword-post-edit
            if (0 === strpos($pathinfo, '/keyword/postEdit') && preg_match('#^/keyword/postEdit/(?P<keywordId>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_keywordpostedit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keyword-post-edit')), array (  '_controller' => 'AppBundle\\Controller\\KeywordController::postEditAction',));
            }
            not_keywordpostedit:

            // keyword-table
            if ($pathinfo === '/keyword/table') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_keywordtable;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\KeywordController::tableAction',  '_route' => 'keyword-table',);
            }
            not_keywordtable:

            // keyword-delete
            if (0 === strpos($pathinfo, '/keyword/delete') && preg_match('#^/keyword/delete/(?P<keywordId>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_keyworddelete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keyword-delete')), array (  '_controller' => 'AppBundle\\Controller\\KeywordController::deleteAction',));
            }
            not_keyworddelete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            // security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'security_logout',);
            }

            // twitter-login
            if ($pathinfo === '/login') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_twitterlogin;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TwitterUserController::loginAction',  '_route' => 'twitter-login',);
            }
            not_twitterlogin:

        }

        if (0 === strpos($pathinfo, '/check')) {
            // check-login-twitter
            if ($pathinfo === '/checkLoginTwitter') {
                return array (  '_controller' => 'AppBundle\\Controller\\TwitterUserController::checkLoginAction',  '_route' => 'check-login-twitter',);
            }

            // check-user
            if ($pathinfo === '/checkUser') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_checkuser;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::checkUserAction',  '_route' => 'check-user',);
            }
            not_checkuser:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
