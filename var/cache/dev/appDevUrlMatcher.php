<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/article')) {
            // sr_article_homepage
            if ($pathinfo === '/article') {
                return array (  '_controller' => 'SR\\BlogBundle\\Controller\\ArticleController::indexAction',  '_route' => 'sr_article_homepage',);
            }

            // sr_article_add
            if ($pathinfo === '/article/add') {
                return array (  '_controller' => 'SR\\BlogBundle\\Controller\\ArticleController::addAction',  '_route' => 'sr_article_add',);
            }

            // sr_article_edit
            if (0 === strpos($pathinfo, '/article/edit') && preg_match('#^/article/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr_article_edit')), array (  '_controller' => 'SR\\BlogBundle\\Controller\\ArticleController::editAction',));
            }

            // sr_article_view
            if (0 === strpos($pathinfo, '/article/view') && preg_match('#^/article/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr_article_view')), array (  '_controller' => 'SR\\BlogBundle\\Controller\\ArticleController::viewAction',));
            }

            // sr_article_delete
            if (0 === strpos($pathinfo, '/article/delete') && preg_match('#^/article/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr_article_delete')), array (  '_controller' => 'SR\\BlogBundle\\Controller\\ArticleController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // sr_user_view
            if (0 === strpos($pathinfo, '/user/view') && preg_match('#^/user/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr_user_view')), array (  '_controller' => 'SR\\BlogBundle\\Controller\\UserController::viewAction',));
            }

            // sr_user_add
            if ($pathinfo === '/user/add') {
                return array (  '_controller' => 'SR\\BlogBundle\\Controller\\UserController::addAction',  '_route' => 'sr_user_add',);
            }

            // sr_user_delete
            if (0 === strpos($pathinfo, '/user/delete') && preg_match('#^/user/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr_user_delete')), array (  '_controller' => 'SR\\BlogBundle\\Controller\\UserController::deleteAction',));
            }

            // sr_user_homepage
            if ($pathinfo === '/user') {
                return array (  '_controller' => 'SR\\BlogBundle\\Controller\\UserController::indexAction',  '_route' => 'sr_user_homepage',);
            }

            // sr_user_edit
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sr_user_edit')), array (  '_controller' => 'SR\\BlogBundle\\Controller\\UserController::editAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'SR\\BlogBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/sr/blog')) {
                if (0 === strpos($pathinfo, '/admin/sr/blog/user')) {
                    // admin_sr_blog_user_list
                    if ($pathinfo === '/admin/sr/blog/user/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_sr_blog_user_list',  '_route' => 'admin_sr_blog_user_list',);
                    }

                    // admin_sr_blog_user_create
                    if ($pathinfo === '/admin/sr/blog/user/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_sr_blog_user_create',  '_route' => 'admin_sr_blog_user_create',);
                    }

                    // admin_sr_blog_user_batch
                    if ($pathinfo === '/admin/sr/blog/user/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_sr_blog_user_batch',  '_route' => 'admin_sr_blog_user_batch',);
                    }

                    // admin_sr_blog_user_edit
                    if (preg_match('#^/admin/sr/blog/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sr_blog_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_sr_blog_user_edit',));
                    }

                    // admin_sr_blog_user_delete
                    if (preg_match('#^/admin/sr/blog/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sr_blog_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_sr_blog_user_delete',));
                    }

                    // admin_sr_blog_user_show
                    if (preg_match('#^/admin/sr/blog/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sr_blog_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_sr_blog_user_show',));
                    }

                    // admin_sr_blog_user_export
                    if ($pathinfo === '/admin/sr/blog/user/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.user',  '_sonata_name' => 'admin_sr_blog_user_export',  '_route' => 'admin_sr_blog_user_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/sr/blog/article')) {
                    // admin_sr_blog_article_list
                    if ($pathinfo === '/admin/sr/blog/article/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.article',  '_sonata_name' => 'admin_sr_blog_article_list',  '_route' => 'admin_sr_blog_article_list',);
                    }

                    // admin_sr_blog_article_create
                    if ($pathinfo === '/admin/sr/blog/article/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.article',  '_sonata_name' => 'admin_sr_blog_article_create',  '_route' => 'admin_sr_blog_article_create',);
                    }

                    // admin_sr_blog_article_batch
                    if ($pathinfo === '/admin/sr/blog/article/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.article',  '_sonata_name' => 'admin_sr_blog_article_batch',  '_route' => 'admin_sr_blog_article_batch',);
                    }

                    // admin_sr_blog_article_edit
                    if (preg_match('#^/admin/sr/blog/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sr_blog_article_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.article',  '_sonata_name' => 'admin_sr_blog_article_edit',));
                    }

                    // admin_sr_blog_article_delete
                    if (preg_match('#^/admin/sr/blog/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sr_blog_article_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.article',  '_sonata_name' => 'admin_sr_blog_article_delete',));
                    }

                    // admin_sr_blog_article_show
                    if (preg_match('#^/admin/sr/blog/article/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sr_blog_article_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.article',  '_sonata_name' => 'admin_sr_blog_article_show',));
                    }

                    // admin_sr_blog_article_export
                    if ($pathinfo === '/admin/sr/blog/article/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.article',  '_sonata_name' => 'admin_sr_blog_article_export',  '_route' => 'admin_sr_blog_article_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
