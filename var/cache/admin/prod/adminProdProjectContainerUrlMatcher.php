<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class adminProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // tag_list
            if ('/admin/tag/template/tag/list.html' === $pathinfo) {
                return array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TemplateController::tagListAction',  '_route' => 'tag_list',);
            }

            if (0 === strpos($pathinfo, '/admin/api/tags')) {
                // get_tag_fields
                if (0 === strpos($pathinfo, '/admin/api/tags/fields') && preg_match('#^/admin/api/tags/fields(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_tag_fields')), array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TagController::getFieldsAction',  '_format' => 'json',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_get_tag_fields;
                    }

                    return $ret;
                }
                not_get_tag_fields:

                // get_tag
                if (preg_match('#^/admin/api/tags/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_tag')), array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TagController::getAction',  '_format' => 'json',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_get_tag;
                    }

                    return $ret;
                }
                not_get_tag:

                // get_tags
                if (preg_match('#^/admin/api/tags(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_tags')), array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TagController::cgetAction',  '_format' => 'json',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_get_tags;
                    }

                    return $ret;
                }
                not_get_tags:

                // post_tag
                if (preg_match('#^/admin/api/tags(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_tag')), array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TagController::postAction',  '_format' => 'json',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_post_tag;
                    }

                    return $ret;
                }
                not_post_tag:

                // put_tag
                if (preg_match('#^/admin/api/tags/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_tag')), array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TagController::putAction',  '_format' => 'json',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_put_tag;
                    }

                    return $ret;
                }
                not_put_tag:

                // delete_tag
                if (preg_match('#^/admin/api/tags/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_tag')), array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TagController::deleteAction',  '_format' => 'json',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_delete_tag;
                    }

                    return $ret;
                }
                not_delete_tag:

                // post_tag_merge
                if (0 === strpos($pathinfo, '/admin/api/tags/merge') && preg_match('#^/admin/api/tags/merge(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_tag_merge')), array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TagController::postMergeAction',  '_format' => 'json',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_post_tag_merge;
                    }

                    return $ret;
                }
                not_post_tag_merge:

                // patch_tagtags
                if (preg_match('#^/admin/api/tags(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_tagtags')), array (  '_controller' => 'Sulu\\Bundle\\TagBundle\\Controller\\TagController::patchAction',  '_format' => 'json',));
                    if (!in_array($requestMethod, array('PATCH'))) {
                        $allow = array_merge($allow, array('PATCH'));
                        goto not_patch_tagtags;
                    }

                    return $ret;
                }
                not_patch_tagtags:

            }

            // sulu_admin
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'sulu_admin.admin_controller:indexAction',  '_route' => 'sulu_admin',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_sulu_admin;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'sulu_admin'));
                }

                return $ret;
            }
            not_sulu_admin:

            if (0 === strpos($pathinfo, '/admin/w')) {
                // sulu_admin.widget_group
                if (0 === strpos($pathinfo, '/admin/widget-groups') && preg_match('#^/admin/widget\\-groups/(?P<groupAlias>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_admin.widget_group')), array (  '_controller' => 'Sulu\\Bundle\\AdminBundle\\Controller\\WidgetGroupsController::groupAction',));
                }

                // sulu_website.cache.remove
                if ('/admin/website/cache' === $pathinfo) {
                    $ret = array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\CacheController::clearAction',  '_route' => 'sulu_website.cache.remove',);
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_sulu_websitecacheremove;
                    }

                    return $ret;
                }
                not_sulu_websitecacheremove:

                // sulu_websocket.fallback
                if (0 === strpos($pathinfo, '/admin/websocket') && preg_match('#^/admin/websocket/(?P<appName>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_websocket.fallback')), array (  '_controller' => 'sulu_websocket.fallback_controller:send',  '_format' => 'json',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_sulu_websocketfallback;
                    }

                    return $ret;
                }
                not_sulu_websocketfallback:

            }

            // get_navigation
            if (0 === strpos($pathinfo, '/admin/navigation') && preg_match('#^/admin/navigation(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_navigation')), array (  '_controller' => 'Sulu\\Bundle\\AdminBundle\\Controller\\NavigationsController::getNavigationAction',  '_format' => 'json',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_navigation;
                }

                return $ret;
            }
            not_get_navigation:

            if (0 === strpos($pathinfo, '/admin/c')) {
                if (0 === strpos($pathinfo, '/admin/cont')) {
                    if (0 === strpos($pathinfo, '/admin/content')) {
                        // get_content-navigations
                        if (0 === strpos($pathinfo, '/admin/content-navigations') && preg_match('#^/admin/content\\-navigations(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_content-navigations')), array (  '_controller' => 'sulu_admin.content_navigation_controller:cgetAction',  '_format' => 'json',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_get_contentnavigations;
                            }

                            return $ret;
                        }
                        not_get_contentnavigations:

                        if (0 === strpos($pathinfo, '/admin/content/template')) {
                            if (0 === strpos($pathinfo, '/admin/content/template/form')) {
                                // sulu_content.content_form
                                if (preg_match('#^/admin/content/template/form/(?P<key>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_content.content_form')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\TemplateController::contentAction',));
                                }

                                // sulu_content.content_form.default
                                if ('/admin/content/template/form.html' === $pathinfo) {
                                    return array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\TemplateController::contentAction',  '_route' => 'sulu_content.content_form.default',);
                                }

                            }

                            // sulu_content.template.get
                            if ('/admin/content/template' === $pathinfo) {
                                return array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\TemplateController::getAction',  '_route' => 'sulu_content.template.get',);
                            }

                            if (0 === strpos($pathinfo, '/admin/content/template/content')) {
                                // sulu_content.content_list
                                if ('/admin/content/template/content/list.html' === $pathinfo) {
                                    return array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\TemplateController::listAction',  '_route' => 'sulu_content.content_list',);
                                }

                                // sulu_content.content_column
                                if (0 === strpos($pathinfo, '/admin/content/template/content/column') && preg_match('#^/admin/content/template/content/column/(?P<webspaceKey>[^/]++)/(?P<languageCode>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_content.content_column')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\TemplateController::columnAction',));
                                }

                                // sulu_content.seo
                                if ('/admin/content/template/content/seo.html' === $pathinfo) {
                                    return array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\TemplateController::seoAction',  '_route' => 'sulu_content.seo',);
                                }

                                // sulu_content.template.settings
                                if ('/admin/content/template/content/settings.html' === $pathinfo) {
                                    return array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\TemplateController::settingsAction',  '_route' => 'sulu_content.template.settings',);
                                }

                            }

                        }

                        // sulu_content.languages.get
                        if ('/admin/content/languages' === $pathinfo) {
                            return array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\TemplateController::getLanguagesAction',  '_route' => 'sulu_content.languages.get',);
                        }

                    }

                    // sulu_admin.contexts
                    if ('/admin/contexts' === $pathinfo) {
                        return array (  '_controller' => 'sulu_admin.admin_controller:contextsAction',  '_route' => 'sulu_admin.contexts',);
                    }

                    if (0 === strpos($pathinfo, '/admin/contact/template')) {
                        // contact_form
                        if ('/admin/contact/template/contact/form.html' === $pathinfo) {
                            return array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\TemplateController::contactFormAction',  '_route' => 'contact_form',);
                        }

                        // contact_list
                        if ('/admin/contact/template/contact/list.html' === $pathinfo) {
                            return array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\TemplateController::contactListAction',  '_route' => 'contact_list',);
                        }

                        if (0 === strpos($pathinfo, '/admin/contact/template/account')) {
                            // account_form
                            if ('/admin/contact/template/account/form.html' === $pathinfo) {
                                return array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\TemplateController::accountFormAction',  '_route' => 'account_form',);
                            }

                            // account_form_contact_list
                            if ('/admin/contact/template/account/form/contact.html' === $pathinfo) {
                                return array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\TemplateController::accountFormContactListAction',  '_route' => 'account_form_contact_list',);
                            }

                            // account_list
                            if ('/admin/contact/template/account/list.html' === $pathinfo) {
                                return array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\TemplateController::accountListAction',  '_route' => 'account_list',);
                            }

                        }

                        // basic_documents
                        if ('/admin/contact/template/basic/documents.html' === $pathinfo) {
                            return array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\TemplateController::basicDocumentsAction',  '_route' => 'basic_documents',);
                        }

                    }

                }

                // sulu_admin.config
                if ('/admin/config' === $pathinfo) {
                    return array (  '_controller' => 'sulu_admin.admin_controller:configAction',  '_route' => 'sulu_admin.config',);
                }

                // sulu_category.template.category.list
                if ('/admin/category/template/category/list.html' === $pathinfo) {
                    return array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\TemplateController::categoriesListAction',  '_route' => 'sulu_category.template.category.list',);
                }

            }

            // sulu_admin.routes
            if ('/admin/bundles' === $pathinfo) {
                return array (  '_controller' => 'sulu_admin.admin_controller:bundlesAction',  '_route' => 'sulu_admin.routes',);
            }

            // sulu_admin.csv_export.form
            if ('/admin/templates/csv-export-form' === $pathinfo) {
                return array (  '_controller' => 'sulu_admin.template_controller:csvExportFormAction',  '_route' => 'sulu_admin.csv_export.form',);
            }

            if (0 === strpos($pathinfo, '/admin/lo')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // sulu_admin.login
                    if ('/admin/login' === $pathinfo) {
                        return array (  '_controller' => 'Sulu\\Bundle\\AdminBundle\\Controller\\SecurityController::loginAction',  '_route' => 'sulu_admin.login',);
                    }

                    // sulu_admin.login_check
                    if ('/admin/login_check' === $pathinfo) {
                        return array('_route' => 'sulu_admin.login_check');
                    }

                }

                // logout
                if ('/admin/logout' === $pathinfo) {
                    return array('_route' => 'logout');
                }

                // sulu_location_geolocator_query
                if ('/admin/location/admin/sulu_location/geolocator' === $pathinfo) {
                    return array (  '_controller' => 'sulu_location.controller.geoloactor:queryAction',  '_route' => 'sulu_location_geolocator_query',);
                }

            }

            // sulu_admin.reset
            if (0 === strpos($pathinfo, '/admin/reset') && preg_match('#^/admin/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_admin.reset')), array (  '_controller' => 'Sulu\\Bundle\\AdminBundle\\Controller\\SecurityController::resetAction',));
            }

            if (0 === strpos($pathinfo, '/admin/api')) {
                if (0 === strpos($pathinfo, '/admin/api/c')) {
                    // get_customers
                    if (0 === strpos($pathinfo, '/admin/api/customers') && preg_match('#^/admin/api/customers(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_customers')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\CustomerController::cgetAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_customers;
                        }

                        return $ret;
                    }
                    not_get_customers:

                    if (0 === strpos($pathinfo, '/admin/api/co')) {
                        if (0 === strpos($pathinfo, '/admin/api/contact')) {
                            if (0 === strpos($pathinfo, '/admin/api/contacts')) {
                                // fields_contact
                                if (0 === strpos($pathinfo, '/admin/api/contacts/fields') && preg_match('#^/admin/api/contacts/fields(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fields_contact')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactController::fieldsAction',  '_format' => 'json',));
                                    if (!in_array($canonicalMethod, array('GET'))) {
                                        $allow = array_merge($allow, array('GET'));
                                        goto not_fields_contact;
                                    }

                                    return $ret;
                                }
                                not_fields_contact:

                                // get_contacts
                                if (preg_match('#^/admin/api/contacts(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_contacts')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactController::cgetAction',  '_format' => 'json',));
                                    if (!in_array($canonicalMethod, array('GET'))) {
                                        $allow = array_merge($allow, array('GET'));
                                        goto not_get_contacts;
                                    }

                                    return $ret;
                                }
                                not_get_contacts:

                                // delete_contact
                                if (preg_match('#^/admin/api/contacts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_contact')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactController::deleteAction',  '_format' => 'json',));
                                    if (!in_array($requestMethod, array('DELETE'))) {
                                        $allow = array_merge($allow, array('DELETE'));
                                        goto not_delete_contact;
                                    }

                                    return $ret;
                                }
                                not_delete_contact:

                                // get_contact
                                if (preg_match('#^/admin/api/contacts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_contact')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactController::getAction',  '_format' => 'json',));
                                    if (!in_array($canonicalMethod, array('GET'))) {
                                        $allow = array_merge($allow, array('GET'));
                                        goto not_get_contact;
                                    }

                                    return $ret;
                                }
                                not_get_contact:

                                // post_contact
                                if (preg_match('#^/admin/api/contacts(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_contact')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactController::postAction',  '_format' => 'json',));
                                    if (!in_array($requestMethod, array('POST'))) {
                                        $allow = array_merge($allow, array('POST'));
                                        goto not_post_contact;
                                    }

                                    return $ret;
                                }
                                not_post_contact:

                                // put_contact
                                if (preg_match('#^/admin/api/contacts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_contact')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactController::putAction',  '_format' => 'json',));
                                    if (!in_array($requestMethod, array('PUT'))) {
                                        $allow = array_merge($allow, array('PUT'));
                                        goto not_put_contact;
                                    }

                                    return $ret;
                                }
                                not_put_contact:

                                // patch_contact
                                if (preg_match('#^/admin/api/contacts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_contact')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactController::patchAction',  '_format' => 'json',));
                                    if (!in_array($requestMethod, array('PATCH'))) {
                                        $allow = array_merge($allow, array('PATCH'));
                                        goto not_patch_contact;
                                    }

                                    return $ret;
                                }
                                not_patch_contact:

                                // put_contact_title
                                if (preg_match('#^/admin/api/contacts/(?P<id>[^/]++)/title(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_contact_title')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactTitleController::putAction',  '_format' => 'json',));
                                    if (!in_array($requestMethod, array('PUT'))) {
                                        $allow = array_merge($allow, array('PUT'));
                                        goto not_put_contact_title;
                                    }

                                    return $ret;
                                }
                                not_put_contact_title:

                                // cget_contact_medias
                                if (preg_match('#^/admin/api/contacts/(?P<id>[^/]++)/medias(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'cget_contact_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactMediaController::cgetAction',  '_format' => 'json',));
                                    if (!in_array($canonicalMethod, array('GET'))) {
                                        $allow = array_merge($allow, array('GET'));
                                        goto not_cget_contact_medias;
                                    }

                                    return $ret;
                                }
                                not_cget_contact_medias:

                                // fields_contact_medias
                                if (0 === strpos($pathinfo, '/admin/api/contacts/medias/fields') && preg_match('#^/admin/api/contacts/medias/fields(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fields_contact_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactMediaController::fieldsAction',  '_format' => 'json',));
                                    if (!in_array($canonicalMethod, array('GET'))) {
                                        $allow = array_merge($allow, array('GET'));
                                        goto not_fields_contact_medias;
                                    }

                                    return $ret;
                                }
                                not_fields_contact_medias:

                                // delete_contact_medias
                                if (preg_match('#^/admin/api/contacts/(?P<id>[^/]++)/medias/(?P<slug>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_contact_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactMediaController::deleteAction',  '_format' => 'json',));
                                    if (!in_array($requestMethod, array('DELETE'))) {
                                        $allow = array_merge($allow, array('DELETE'));
                                        goto not_delete_contact_medias;
                                    }

                                    return $ret;
                                }
                                not_delete_contact_medias:

                                // post_contact_medias
                                if (preg_match('#^/admin/api/contacts/(?P<id>[^/]++)/medias(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_contact_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactMediaController::postAction',  '_format' => 'json',));
                                    if (!in_array($requestMethod, array('POST'))) {
                                        $allow = array_merge($allow, array('POST'));
                                        goto not_post_contact_medias;
                                    }

                                    return $ret;
                                }
                                not_post_contact_medias:

                                // get_contact_medias
                                if (preg_match('#^/admin/api/contacts/(?P<id>[^/]++)/medias(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_contact_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactMediaController::cgetAction',  '_format' => 'json',));
                                    if (!in_array($canonicalMethod, array('GET'))) {
                                        $allow = array_merge($allow, array('GET'));
                                        goto not_get_contact_medias;
                                    }

                                    return $ret;
                                }
                                not_get_contact_medias:

                            }

                            elseif (0 === strpos($pathinfo, '/admin/api/contact/titles')) {
                                // get_contact_title
                                if (preg_match('#^/admin/api/contact/titles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_contact_title')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactTitleController::getAction',  '_format' => 'json',));
                                    if (!in_array($canonicalMethod, array('GET'))) {
                                        $allow = array_merge($allow, array('GET'));
                                        goto not_get_contact_title;
                                    }

                                    return $ret;
                                }
                                not_get_contact_title:

                                // get_contact_titles
                                if (preg_match('#^/admin/api/contact/titles(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_contact_titles')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactTitleController::cgetAction',  '_format' => 'json',));
                                    if (!in_array($canonicalMethod, array('GET'))) {
                                        $allow = array_merge($allow, array('GET'));
                                        goto not_get_contact_titles;
                                    }

                                    return $ret;
                                }
                                not_get_contact_titles:

                                // post_contact_title
                                if (preg_match('#^/admin/api/contact/titles(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_contact_title')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactTitleController::postAction',  '_format' => 'json',));
                                    if (!in_array($requestMethod, array('POST'))) {
                                        $allow = array_merge($allow, array('POST'));
                                        goto not_post_contact_title;
                                    }

                                    return $ret;
                                }
                                not_post_contact_title:

                                // delete_contact_title
                                if (preg_match('#^/admin/api/contact/titles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_contact_title')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactTitleController::deleteAction',  '_format' => 'json',));
                                    if (!in_array($requestMethod, array('DELETE'))) {
                                        $allow = array_merge($allow, array('DELETE'));
                                        goto not_delete_contact_title;
                                    }

                                    return $ret;
                                }
                                not_delete_contact_title:

                                // patch_contact_title
                                if (preg_match('#^/admin/api/contact/titles(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_contact_title')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\ContactTitleController::patchAction',  '_format' => 'json',));
                                    if (!in_array($requestMethod, array('PATCH'))) {
                                        $allow = array_merge($allow, array('PATCH'));
                                        goto not_patch_contact_title;
                                    }

                                    return $ret;
                                }
                                not_patch_contact_title:

                            }

                            elseif (0 === strpos($pathinfo, '/admin/api/contact/positions')) {
                                // get_position
                                if (preg_match('#^/admin/api/contact/positions/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_position')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\PositionController::getAction',  '_format' => 'json',));
                                    if (!in_array($canonicalMethod, array('GET'))) {
                                        $allow = array_merge($allow, array('GET'));
                                        goto not_get_position;
                                    }

                                    return $ret;
                                }
                                not_get_position:

                                // get_positions
                                if (preg_match('#^/admin/api/contact/positions(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_positions')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\PositionController::cgetAction',  '_format' => 'json',));
                                    if (!in_array($canonicalMethod, array('GET'))) {
                                        $allow = array_merge($allow, array('GET'));
                                        goto not_get_positions;
                                    }

                                    return $ret;
                                }
                                not_get_positions:

                                // post_position
                                if (preg_match('#^/admin/api/contact/positions(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_position')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\PositionController::postAction',  '_format' => 'json',));
                                    if (!in_array($requestMethod, array('POST'))) {
                                        $allow = array_merge($allow, array('POST'));
                                        goto not_post_position;
                                    }

                                    return $ret;
                                }
                                not_post_position:

                                // delete_position
                                if (preg_match('#^/admin/api/contact/positions/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_position')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\PositionController::deleteAction',  '_format' => 'json',));
                                    if (!in_array($requestMethod, array('DELETE'))) {
                                        $allow = array_merge($allow, array('DELETE'));
                                        goto not_delete_position;
                                    }

                                    return $ret;
                                }
                                not_delete_position:

                                // patch_position
                                if (preg_match('#^/admin/api/contact/positions(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_position')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\PositionController::patchAction',  '_format' => 'json',));
                                    if (!in_array($requestMethod, array('PATCH'))) {
                                        $allow = array_merge($allow, array('PATCH'));
                                        goto not_patch_position;
                                    }

                                    return $ret;
                                }
                                not_patch_position:

                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/api/countries')) {
                            // get_country
                            if (preg_match('#^/admin/api/countries/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_country')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\CountryController::getAction',  '_format' => 'json',));
                                if (!in_array($canonicalMethod, array('GET'))) {
                                    $allow = array_merge($allow, array('GET'));
                                    goto not_get_country;
                                }

                                return $ret;
                            }
                            not_get_country:

                            // get_countries
                            if (preg_match('#^/admin/api/countries(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_countries')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\CountryController::cgetAction',  '_format' => 'json',));
                                if (!in_array($canonicalMethod, array('GET'))) {
                                    $allow = array_merge($allow, array('GET'));
                                    goto not_get_countries;
                                }

                                return $ret;
                            }
                            not_get_countries:

                        }

                        // get_collection_fields
                        if (0 === strpos($pathinfo, '/admin/api/collection/fields') && preg_match('#^/admin/api/collection/fields(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_collection_fields')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\CollectionController::getFieldsAction',  '_format' => 'json',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_get_collection_fields;
                            }

                            return $ret;
                        }
                        not_get_collection_fields:

                        if (0 === strpos($pathinfo, '/admin/api/collections')) {
                            // get_collection
                            if (preg_match('#^/admin/api/collections/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_collection')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\CollectionController::getAction',  '_format' => 'json',));
                                if (!in_array($canonicalMethod, array('GET'))) {
                                    $allow = array_merge($allow, array('GET'));
                                    goto not_get_collection;
                                }

                                return $ret;
                            }
                            not_get_collection:

                            // get_collections
                            if (preg_match('#^/admin/api/collections(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_collections')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\CollectionController::cgetAction',  '_format' => 'json',));
                                if (!in_array($canonicalMethod, array('GET'))) {
                                    $allow = array_merge($allow, array('GET'));
                                    goto not_get_collections;
                                }

                                return $ret;
                            }
                            not_get_collections:

                            // post_collection
                            if (preg_match('#^/admin/api/collections(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_collection')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\CollectionController::postAction',  '_format' => 'json',));
                                if (!in_array($requestMethod, array('POST'))) {
                                    $allow = array_merge($allow, array('POST'));
                                    goto not_post_collection;
                                }

                                return $ret;
                            }
                            not_post_collection:

                            // put_collection
                            if (preg_match('#^/admin/api/collections/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_collection')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\CollectionController::putAction',  '_format' => 'json',));
                                if (!in_array($requestMethod, array('PUT'))) {
                                    $allow = array_merge($allow, array('PUT'));
                                    goto not_put_collection;
                                }

                                return $ret;
                            }
                            not_put_collection:

                            // delete_collection
                            if (preg_match('#^/admin/api/collections/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_collection')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\CollectionController::deleteAction',  '_format' => 'json',));
                                if (!in_array($requestMethod, array('DELETE'))) {
                                    $allow = array_merge($allow, array('DELETE'));
                                    goto not_delete_collection;
                                }

                                return $ret;
                            }
                            not_delete_collection:

                            // post_collection_trigger
                            if (preg_match('#^/admin/api/collections/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_collection_trigger')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\CollectionController::postTriggerAction',  '_format' => 'json',));
                                if (!in_array($requestMethod, array('POST'))) {
                                    $allow = array_merge($allow, array('POST'));
                                    goto not_post_collection_trigger;
                                }

                                return $ret;
                            }
                            not_post_collection_trigger:

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/api/categories')) {
                        // get_category_fields
                        if (0 === strpos($pathinfo, '/admin/api/categories/fields') && preg_match('#^/admin/api/categories/fields(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_category_fields')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\CategoryController::getFieldsAction',  '_format' => 'json',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_get_category_fields;
                            }

                            return $ret;
                        }
                        not_get_category_fields:

                        // get_category
                        if (preg_match('#^/admin/api/categories/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_category')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\CategoryController::getAction',  '_format' => 'json',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_get_category;
                            }

                            return $ret;
                        }
                        not_get_category:

                        // get_category_children
                        if (preg_match('#^/admin/api/categories/(?P<parentId>[^/]++)/children(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_category_children')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\CategoryController::getChildrenAction',  '_format' => 'json',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_get_category_children;
                            }

                            return $ret;
                        }
                        not_get_category_children:

                        // get_categories
                        if (preg_match('#^/admin/api/categories(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_categories')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\CategoryController::cgetAction',  '_format' => 'json',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_get_categories;
                            }

                            return $ret;
                        }
                        not_get_categories:

                        // post_category_trigger
                        if (preg_match('#^/admin/api/categories/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_category_trigger')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\CategoryController::postTriggerAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_post_category_trigger;
                            }

                            return $ret;
                        }
                        not_post_category_trigger:

                        // post_category
                        if (preg_match('#^/admin/api/categories(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_category')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\CategoryController::postAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_post_category;
                            }

                            return $ret;
                        }
                        not_post_category:

                        // put_category
                        if (preg_match('#^/admin/api/categories/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_category')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\CategoryController::putAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('PUT'))) {
                                $allow = array_merge($allow, array('PUT'));
                                goto not_put_category;
                            }

                            return $ret;
                        }
                        not_put_category:

                        // patch_category
                        if (preg_match('#^/admin/api/categories/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_category')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\CategoryController::patchAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('PATCH'))) {
                                $allow = array_merge($allow, array('PATCH'));
                                goto not_patch_category;
                            }

                            return $ret;
                        }
                        not_patch_category:

                        // delete_category
                        if (preg_match('#^/admin/api/categories/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_category')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\CategoryController::deleteAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('DELETE'))) {
                                $allow = array_merge($allow, array('DELETE'));
                                goto not_delete_category;
                            }

                            return $ret;
                        }
                        not_delete_category:

                        // fields_category_keyword
                        if (preg_match('#^/admin/api/categories/(?P<categoryId>[^/]++)/keywords/fields(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fields_category_keyword')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\KeywordController::fieldsAction',  '_format' => 'json',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_fields_category_keyword;
                            }

                            return $ret;
                        }
                        not_fields_category_keyword:

                        // get_category_keywords
                        if (preg_match('#^/admin/api/categories/(?P<categoryId>[^/]++)/keywords(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_category_keywords')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\KeywordController::cgetAction',  '_format' => 'json',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_get_category_keywords;
                            }

                            return $ret;
                        }
                        not_get_category_keywords:

                        // post_category_keyword
                        if (preg_match('#^/admin/api/categories/(?P<categoryId>[^/]++)/keywords(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_category_keyword')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\KeywordController::postAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_post_category_keyword;
                            }

                            return $ret;
                        }
                        not_post_category_keyword:

                        // put_category_keyword
                        if (preg_match('#^/admin/api/categories/(?P<categoryId>[^/]++)/keywords/(?P<keywordId>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_category_keyword')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\KeywordController::putAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('PUT'))) {
                                $allow = array_merge($allow, array('PUT'));
                                goto not_put_category_keyword;
                            }

                            return $ret;
                        }
                        not_put_category_keyword:

                        // delete_category_keyword
                        if (preg_match('#^/admin/api/categories/(?P<categoryId>[^/]++)/keywords/(?P<keywordId>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_category_keyword')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\KeywordController::deleteAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('DELETE'))) {
                                $allow = array_merge($allow, array('DELETE'));
                                goto not_delete_category_keyword;
                            }

                            return $ret;
                        }
                        not_delete_category_keyword:

                        // delete_category_keywords
                        if (preg_match('#^/admin/api/categories/(?P<categoryId>[^/]++)/keywords(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_category_keywords')), array (  '_controller' => 'Sulu\\Bundle\\CategoryBundle\\Controller\\KeywordController::cdeleteAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('DELETE'))) {
                                $allow = array_merge($allow, array('DELETE'));
                                goto not_delete_category_keywords;
                            }

                            return $ret;
                        }
                        not_delete_category_keywords:

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/api/accounts')) {
                    // fields_account
                    if (0 === strpos($pathinfo, '/admin/api/accounts/fields') && preg_match('#^/admin/api/accounts/fields(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fields_account')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::fieldsAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_fields_account;
                        }

                        return $ret;
                    }
                    not_fields_account:

                    // multipledeleteinfo_account
                    if (0 === strpos($pathinfo, '/admin/api/accounts/multipledeleteinfo') && preg_match('#^/admin/api/accounts/multipledeleteinfo(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'multipledeleteinfo_account')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::multipledeleteinfoAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_multipledeleteinfo_account;
                        }

                        return $ret;
                    }
                    not_multipledeleteinfo_account:

                    // get_account
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_account')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::getAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_account;
                        }

                        return $ret;
                    }
                    not_get_account:

                    // get_account_contacts
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/]++)/contacts(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_account_contacts')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::getContactsAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_account_contacts;
                        }

                        return $ret;
                    }
                    not_get_account_contacts:

                    // get_account_addresses
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/]++)/addresses(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_account_addresses')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::getAddressesAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_account_addresses;
                        }

                        return $ret;
                    }
                    not_get_account_addresses:

                    // put_account_contacts
                    if (preg_match('#^/admin/api/accounts/(?P<accountId>[^/]++)/contacts/(?P<contactId>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_account_contacts')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::putContactsAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_put_account_contacts;
                        }

                        return $ret;
                    }
                    not_put_account_contacts:

                    // delete_account_contacts
                    if (preg_match('#^/admin/api/accounts/(?P<accountId>[^/]++)/contacts/(?P<contactId>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_account_contacts')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::deleteContactsAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_delete_account_contacts;
                        }

                        return $ret;
                    }
                    not_delete_account_contacts:

                    // get_accounts
                    if (preg_match('#^/admin/api/accounts(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_accounts')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::cgetAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_accounts;
                        }

                        return $ret;
                    }
                    not_get_accounts:

                    // post_account
                    if (preg_match('#^/admin/api/accounts(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_account')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::postAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_post_account;
                        }

                        return $ret;
                    }
                    not_post_account:

                    // put_account
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_account')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::putAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_put_account;
                        }

                        return $ret;
                    }
                    not_put_account:

                    // patch_account
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_account')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::patchAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('PATCH'))) {
                            $allow = array_merge($allow, array('PATCH'));
                            goto not_patch_account;
                        }

                        return $ret;
                    }
                    not_patch_account:

                    // delete_account
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_account')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::deleteAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_delete_account;
                        }

                        return $ret;
                    }
                    not_delete_account:

                    // get_account_deleteinfo
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/]++)/deleteinfo(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_account_deleteinfo')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountController::getDeleteinfoAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_account_deleteinfo;
                        }

                        return $ret;
                    }
                    not_get_account_deleteinfo:

                    // cget_account_medias
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/]++)/medias(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'cget_account_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountMediaController::cgetAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_cget_account_medias;
                        }

                        return $ret;
                    }
                    not_cget_account_medias:

                    // fields_account_medias
                    if (0 === strpos($pathinfo, '/admin/api/accounts/medias/fields') && preg_match('#^/admin/api/accounts/medias/fields(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fields_account_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountMediaController::fieldsAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_fields_account_medias;
                        }

                        return $ret;
                    }
                    not_fields_account_medias:

                    // delete_account_medias
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/]++)/medias/(?P<slug>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_account_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountMediaController::deleteAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_delete_account_medias;
                        }

                        return $ret;
                    }
                    not_delete_account_medias:

                    // post_account_medias
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/]++)/medias(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_account_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountMediaController::postAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_post_account_medias;
                        }

                        return $ret;
                    }
                    not_post_account_medias:

                    // get_account_medias
                    if (preg_match('#^/admin/api/accounts/(?P<id>[^/]++)/medias(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_account_medias')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\AccountMediaController::cgetAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_account_medias;
                        }

                        return $ret;
                    }
                    not_get_account_medias:

                }

                // put_position
                if (0 === strpos($pathinfo, '/admin/api/positions') && preg_match('#^/admin/api/positions/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_position')), array (  '_controller' => 'Sulu\\Bundle\\ContactBundle\\Controller\\PositionController::putAction',  '_format' => 'json',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_put_position;
                    }

                    return $ret;
                }
                not_put_position:

                if (0 === strpos($pathinfo, '/admin/api/permissions')) {
                    // get_permissions
                    if (preg_match('#^/admin/api/permissions(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_permissions')), array (  '_controller' => 'sulu_security.permission_controller:cgetAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_permissions;
                        }

                        return $ret;
                    }
                    not_get_permissions:

                    // post_permission
                    if (preg_match('#^/admin/api/permissions(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_permission')), array (  '_controller' => 'sulu_security.permission_controller:postAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_post_permission;
                        }

                        return $ret;
                    }
                    not_post_permission:

                }

                elseif (0 === strpos($pathinfo, '/admin/api/roles')) {
                    // get_role_fields
                    if (0 === strpos($pathinfo, '/admin/api/roles/fields') && preg_match('#^/admin/api/roles/fields(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_role_fields')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::getFieldsAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_role_fields;
                        }

                        return $ret;
                    }
                    not_get_role_fields:

                    // get_roles
                    if (preg_match('#^/admin/api/roles(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_roles')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::cgetAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_roles;
                        }

                        return $ret;
                    }
                    not_get_roles:

                    // get_role
                    if (preg_match('#^/admin/api/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_role')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::getAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_role;
                        }

                        return $ret;
                    }
                    not_get_role:

                    // post_role
                    if (preg_match('#^/admin/api/roles(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_role')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::postAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_post_role;
                        }

                        return $ret;
                    }
                    not_post_role:

                    // put_role
                    if (preg_match('#^/admin/api/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_role')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::putAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_put_role;
                        }

                        return $ret;
                    }
                    not_put_role:

                    // delete_role
                    if (preg_match('#^/admin/api/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_role')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::deleteAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_delete_role;
                        }

                        return $ret;
                    }
                    not_delete_role:

                    // get_role_setting
                    if (preg_match('#^/admin/api/roles/(?P<roleId>[^/]++)/settings/(?P<key>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_role_setting')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleSettingController::getAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_role_setting;
                        }

                        return $ret;
                    }
                    not_get_role_setting:

                    // put_role_setting
                    if (preg_match('#^/admin/api/roles/(?P<roleId>[^/]++)/settings/(?P<key>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_role_setting')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleSettingController::putAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_put_role_setting;
                        }

                        return $ret;
                    }
                    not_put_role_setting:

                }

                elseif (0 === strpos($pathinfo, '/admin/api/routes')) {
                    // get_routes
                    if (preg_match('#^/admin/api/routes(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_routes')), array (  '_controller' => 'Sulu\\Bundle\\RouteBundle\\Controller\\RouteController::cgetAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_routes;
                        }

                        return $ret;
                    }
                    not_get_routes:

                    // delete_route
                    if (preg_match('#^/admin/api/routes/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_route')), array (  '_controller' => 'Sulu\\Bundle\\RouteBundle\\Controller\\RouteController::deleteAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_delete_route;
                        }

                        return $ret;
                    }
                    not_delete_route:

                }

                elseif (0 === strpos($pathinfo, '/admin/api/groups')) {
                    // get_groups
                    if (preg_match('#^/admin/api/groups(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_groups')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\GroupController::cgetAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_groups;
                        }

                        return $ret;
                    }
                    not_get_groups:

                    // get_group
                    if (preg_match('#^/admin/api/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_group')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\GroupController::getAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_group;
                        }

                        return $ret;
                    }
                    not_get_group:

                    // post_group
                    if (preg_match('#^/admin/api/groups(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_group')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\GroupController::postAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_post_group;
                        }

                        return $ret;
                    }
                    not_post_group:

                    // put_group
                    if (preg_match('#^/admin/api/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_group')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\GroupController::putAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_put_group;
                        }

                        return $ret;
                    }
                    not_put_group:

                    // delete_group
                    if (preg_match('#^/admin/api/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_group')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\GroupController::deleteAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_delete_group;
                        }

                        return $ret;
                    }
                    not_delete_group:

                }

                elseif (0 === strpos($pathinfo, '/admin/api/users')) {
                    // get_user
                    if (preg_match('#^/admin/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::getAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_user;
                        }

                        return $ret;
                    }
                    not_get_user:

                    // post_user
                    if (preg_match('#^/admin/api/users(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_user')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::postAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_post_user;
                        }

                        return $ret;
                    }
                    not_post_user:

                    // post_user_enable_user
                    if (preg_match('#^/admin/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_user_enable_user')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::postEnableUserAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_post_user_enable_user;
                        }

                        return $ret;
                    }
                    not_post_user_enable_user:

                    // put_user
                    if (preg_match('#^/admin/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_user')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::putAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_put_user;
                        }

                        return $ret;
                    }
                    not_put_user:

                    // patch_user
                    if (preg_match('#^/admin/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_user')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::patchAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('PATCH'))) {
                            $allow = array_merge($allow, array('PATCH'));
                            goto not_patch_user;
                        }

                        return $ret;
                    }
                    not_patch_user:

                    // delete_user
                    if (preg_match('#^/admin/api/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_user')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::deleteAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_delete_user;
                        }

                        return $ret;
                    }
                    not_delete_user:

                    // get_users
                    if (preg_match('#^/admin/api/users(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_users')), array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::cgetAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_users;
                        }

                        return $ret;
                    }
                    not_get_users:

                }

                elseif (0 === strpos($pathinfo, '/admin/api/nodes')) {
                    // post_node_resourcelocator_generate
                    if (0 === strpos($pathinfo, '/admin/api/nodes/resourcelocators/generates') && preg_match('#^/admin/api/nodes/resourcelocators/generates(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_node_resourcelocator_generate')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeResourcelocatorController::postGenerateAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_post_node_resourcelocator_generate;
                        }

                        return $ret;
                    }
                    not_post_node_resourcelocator_generate:

                    // get_node_resourcelocators
                    if (preg_match('#^/admin/api/nodes/(?P<uuid>[^/]++)/resourcelocators(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_node_resourcelocators')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeResourcelocatorController::cgetAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_node_resourcelocators;
                        }

                        return $ret;
                    }
                    not_get_node_resourcelocators:

                    // entry_node
                    if (0 === strpos($pathinfo, '/admin/api/nodes/entry') && preg_match('#^/admin/api/nodes/entry(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'entry_node')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::entryAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_entry_node;
                        }

                        return $ret;
                    }
                    not_entry_node:

                    // index_node
                    if (0 === strpos($pathinfo, '/admin/api/nodes/index') && preg_match('#^/admin/api/nodes/index(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'index_node')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::indexAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_index_node;
                        }

                        return $ret;
                    }
                    not_index_node:

                    // filter_node
                    if (0 === strpos($pathinfo, '/admin/api/nodes/filter') && preg_match('#^/admin/api/nodes/filter(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'filter_node')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::filterAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_filter_node;
                        }

                        return $ret;
                    }
                    not_filter_node:

                    // get_node
                    if (preg_match('#^/admin/api/nodes/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_node')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::getAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_node;
                        }

                        return $ret;
                    }
                    not_get_node:

                    // get_nodes
                    if (preg_match('#^/admin/api/nodes(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_nodes')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::cgetAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_nodes;
                        }

                        return $ret;
                    }
                    not_get_nodes:

                    // put_node
                    if (preg_match('#^/admin/api/nodes/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_node')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::putAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_put_node;
                        }

                        return $ret;
                    }
                    not_put_node:

                    // post_node
                    if (preg_match('#^/admin/api/nodes(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_node')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::postAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_post_node;
                        }

                        return $ret;
                    }
                    not_post_node:

                    // delete_node
                    if (preg_match('#^/admin/api/nodes/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_node')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::deleteAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_delete_node;
                        }

                        return $ret;
                    }
                    not_delete_node:

                    // post_node_trigger
                    if (preg_match('#^/admin/api/nodes/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_node_trigger')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeController::postTriggerAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_post_node_trigger;
                        }

                        return $ret;
                    }
                    not_post_node_trigger:

                    // get_node_seo
                    if (preg_match('#^/admin/api/nodes/(?P<uuid>[^/]++)/seo(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_node_seo')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\SeoController::getAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_node_seo;
                        }

                        return $ret;
                    }
                    not_get_node_seo:

                    // post_node_seo
                    if (preg_match('#^/admin/api/nodes/(?P<uuid>[^/]++)/seos(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_node_seo')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\SeoController::postAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_post_node_seo;
                        }

                        return $ret;
                    }
                    not_post_node_seo:

                }

                // delete_node_resourcelocator
                if (0 === strpos($pathinfo, '/admin/api/node/resourcelocator') && preg_match('#^/admin/api/node/resourcelocator(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_node_resourcelocator')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\NodeResourcelocatorController::deleteAction',  '_format' => 'json',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_delete_node_resourcelocator;
                    }

                    return $ret;
                }
                not_delete_node_resourcelocator:

                // get_webspace_localizations
                if (0 === strpos($pathinfo, '/admin/api/webspace/localizations') && preg_match('#^/admin/api/webspace/localizations(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_webspace_localizations')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\WebspaceLocalizationController::cgetAction',  '_format' => 'json',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_get_webspace_localizations;
                    }

                    return $ret;
                }
                not_get_webspace_localizations:

                if (0 === strpos($pathinfo, '/admin/api/webspaces')) {
                    // get_webspaces
                    if (preg_match('#^/admin/api/webspaces(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_webspaces')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\WebspaceController::cgetAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_webspaces;
                        }

                        return $ret;
                    }
                    not_get_webspaces:

                    // get_webspace
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_webspace')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\WebspaceController::getAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_webspace;
                        }

                        return $ret;
                    }
                    not_get_webspace:

                    // cget_webspace_analytics
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/analytics(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'cget_webspace_analytics')), array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\AnalyticsController::cgetAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_cget_webspace_analytics;
                        }

                        return $ret;
                    }
                    not_cget_webspace_analytics:

                    // cdelete_webspace_analytics
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/analytics(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'cdelete_webspace_analytics')), array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\AnalyticsController::cdeleteAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_cdelete_webspace_analytics;
                        }

                        return $ret;
                    }
                    not_cdelete_webspace_analytics:

                    // get_webspace_analytics
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/analytics/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_webspace_analytics')), array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\AnalyticsController::getAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_webspace_analytics;
                        }

                        return $ret;
                    }
                    not_get_webspace_analytics:

                    // post_webspace_analytics
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/analytics(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_webspace_analytics')), array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\AnalyticsController::postAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_post_webspace_analytics;
                        }

                        return $ret;
                    }
                    not_post_webspace_analytics:

                    // put_webspace_analytics
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/analytics/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_webspace_analytics')), array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\AnalyticsController::putAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_put_webspace_analytics;
                        }

                        return $ret;
                    }
                    not_put_webspace_analytics:

                    // delete_webspace_analytics
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/analytics/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_webspace_analytics')), array (  '_controller' => 'Sulu\\Bundle\\WebsiteBundle\\Controller\\AnalyticsController::deleteAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_delete_webspace_analytics;
                        }

                        return $ret;
                    }
                    not_delete_webspace_analytics:

                    // cget_webspace_custom-urls
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/custom\\-urls(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'cget_webspace_custom-urls')), array (  '_controller' => 'Sulu\\Bundle\\CustomUrlBundle\\Controller\\CustomUrlController::cgetAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_cget_webspace_customurls;
                        }

                        return $ret;
                    }
                    not_cget_webspace_customurls:

                    // cdelete_webspace_custom-urls
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/custom\\-urls(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'cdelete_webspace_custom-urls')), array (  '_controller' => 'Sulu\\Bundle\\CustomUrlBundle\\Controller\\CustomUrlController::cdeleteAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_cdelete_webspace_customurls;
                        }

                        return $ret;
                    }
                    not_cdelete_webspace_customurls:

                    // cdelete_webspace_custom-urls_routes
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/custom\\-urls/(?P<customUrlUuid>[^/]++)/routes(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'cdelete_webspace_custom-urls_routes')), array (  '_controller' => 'Sulu\\Bundle\\CustomUrlBundle\\Controller\\CustomUrlController::cdeleteRoutesAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_cdelete_webspace_customurls_routes;
                        }

                        return $ret;
                    }
                    not_cdelete_webspace_customurls_routes:

                    // get_webspace_custom-urls
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/custom\\-urls/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_webspace_custom-urls')), array (  '_controller' => 'Sulu\\Bundle\\CustomUrlBundle\\Controller\\CustomUrlController::getAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_webspace_customurls;
                        }

                        return $ret;
                    }
                    not_get_webspace_customurls:

                    // post_webspace_custom-urls
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/custom\\-urls(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_webspace_custom-urls')), array (  '_controller' => 'Sulu\\Bundle\\CustomUrlBundle\\Controller\\CustomUrlController::postAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_post_webspace_customurls;
                        }

                        return $ret;
                    }
                    not_post_webspace_customurls:

                    // put_webspace_custom-urls
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/custom\\-urls/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_webspace_custom-urls')), array (  '_controller' => 'Sulu\\Bundle\\CustomUrlBundle\\Controller\\CustomUrlController::putAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_put_webspace_customurls;
                        }

                        return $ret;
                    }
                    not_put_webspace_customurls:

                    // delete_webspace_custom-urls
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/custom\\-urls/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_webspace_custom-urls')), array (  '_controller' => 'Sulu\\Bundle\\CustomUrlBundle\\Controller\\CustomUrlController::deleteAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_delete_webspace_customurls;
                        }

                        return $ret;
                    }
                    not_delete_webspace_customurls:

                    // delete_webspace_custom-urls_routes
                    if (preg_match('#^/admin/api/webspaces/(?P<webspaceKey>[^/]++)/custom\\-urls/(?P<customUrlUuid>[^/]++)/routes(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_webspace_custom-urls_routes')), array (  '_controller' => 'Sulu\\Bundle\\CustomUrlBundle\\Controller\\CustomUrlController::cdeleteRoutesAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_delete_webspace_customurls_routes;
                        }

                        return $ret;
                    }
                    not_delete_webspace_customurls_routes:

                }

                // get_items
                if (0 === strpos($pathinfo, '/admin/api/items') && preg_match('#^/admin/api/items(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_items')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\SmartContentItemController::getItemsAction',  '_format' => 'json',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_get_items;
                    }

                    return $ret;
                }
                not_get_items:

                // get_teasers
                if (0 === strpos($pathinfo, '/admin/api/teasers') && preg_match('#^/admin/api/teasers(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_teasers')), array (  '_controller' => 'Sulu\\Bundle\\ContentBundle\\Controller\\TeaserController::cgetAction',  '_format' => 'json',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_get_teasers;
                    }

                    return $ret;
                }
                not_get_teasers:

                if (0 === strpos($pathinfo, '/admin/api/media')) {
                    // cget_media
                    if (preg_match('#^/admin/api/media(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'cget_media')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaController::cgetAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_cget_media;
                        }

                        return $ret;
                    }
                    not_cget_media:

                    // get_media_fields
                    if (0 === strpos($pathinfo, '/admin/api/media/fields') && preg_match('#^/admin/api/media/fields(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_media_fields')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaController::getFieldsAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_media_fields;
                        }

                        return $ret;
                    }
                    not_get_media_fields:

                    // get_media
                    if (preg_match('#^/admin/api/media/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_media')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaController::getAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_media;
                        }

                        return $ret;
                    }
                    not_get_media:

                    // post_media
                    if (preg_match('#^/admin/api/media(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_media')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaController::postAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_post_media;
                        }

                        return $ret;
                    }
                    not_post_media:

                    // put_media
                    if (preg_match('#^/admin/api/media/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_media')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaController::putAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_put_media;
                        }

                        return $ret;
                    }
                    not_put_media:

                    // delete_media
                    if (preg_match('#^/admin/api/media/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_media')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaController::deleteAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_delete_media;
                        }

                        return $ret;
                    }
                    not_delete_media:

                    // delete_media_version
                    if (preg_match('#^/admin/api/media/(?P<id>[^/]++)/versions/(?P<version>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_media_version')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaController::deleteVersionAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_delete_media_version;
                        }

                        return $ret;
                    }
                    not_delete_media_version:

                    // post_media_trigger
                    if (preg_match('#^/admin/api/media/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_media_trigger')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaController::postTriggerAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_post_media_trigger;
                        }

                        return $ret;
                    }
                    not_post_media_trigger:

                    // post_media_preview
                    if (preg_match('#^/admin/api/media/(?P<id>[^/]++)/preview(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_media_preview')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaPreviewController::postAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_post_media_preview;
                        }

                        return $ret;
                    }
                    not_post_media_preview:

                    // delete_media_preview
                    if (preg_match('#^/admin/api/media/(?P<id>[^/]++)/preview(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_media_preview')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaPreviewController::deleteAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_delete_media_preview;
                        }

                        return $ret;
                    }
                    not_delete_media_preview:

                    // get_media_formats
                    if (preg_match('#^/admin/api/media/(?P<id>[^/]++)/formats(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_media_formats')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\FormatController::cgetAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_media_formats;
                        }

                        return $ret;
                    }
                    not_get_media_formats:

                    // put_media_format
                    if (preg_match('#^/admin/api/media/(?P<id>[^/]++)/formats/(?P<key>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_media_format')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\FormatController::putAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_put_media_format;
                        }

                        return $ret;
                    }
                    not_put_media_format:

                }

                elseif (0 === strpos($pathinfo, '/admin/api/snippet')) {
                    if (0 === strpos($pathinfo, '/admin/api/snippets')) {
                        // get_snippets
                        if (preg_match('#^/admin/api/snippets(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_snippets')), array (  '_controller' => 'sulu_snippet.controller.snippet:cgetAction',  '_format' => 'json',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_get_snippets;
                            }

                            return $ret;
                        }
                        not_get_snippets:

                        // get_snippet
                        if (preg_match('#^/admin/api/snippets(?:/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?)?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_snippet')), array (  '_controller' => 'sulu_snippet.controller.snippet:getAction',  'uuid' => '',  '_format' => 'json',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_get_snippet;
                            }

                            return $ret;
                        }
                        not_get_snippet:

                        // post_snippet
                        if (preg_match('#^/admin/api/snippets(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_snippet')), array (  '_controller' => 'sulu_snippet.controller.snippet:postAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_post_snippet;
                            }

                            return $ret;
                        }
                        not_post_snippet:

                        // put_snippet
                        if (preg_match('#^/admin/api/snippets/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_snippet')), array (  '_controller' => 'sulu_snippet.controller.snippet:putAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('PUT'))) {
                                $allow = array_merge($allow, array('PUT'));
                                goto not_put_snippet;
                            }

                            return $ret;
                        }
                        not_put_snippet:

                        // delete_snippet
                        if (preg_match('#^/admin/api/snippets/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_snippet')), array (  '_controller' => 'sulu_snippet.controller.snippet:deleteAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('DELETE'))) {
                                $allow = array_merge($allow, array('DELETE'));
                                goto not_delete_snippet;
                            }

                            return $ret;
                        }
                        not_delete_snippet:

                        // post_snippet_trigger
                        if (preg_match('#^/admin/api/snippets/(?P<uuid>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_snippet_trigger')), array (  '_controller' => 'sulu_snippet.controller.snippet:postTriggerAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_post_snippet_trigger;
                            }

                            return $ret;
                        }
                        not_post_snippet_trigger:

                    }

                    // get_snippet_fields
                    if (0 === strpos($pathinfo, '/admin/api/snippet/fields') && preg_match('#^/admin/api/snippet/fields(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_snippet_fields')), array (  '_controller' => 'sulu_snippet.controller.snippet:getFieldsAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_get_snippet_fields;
                        }

                        return $ret;
                    }
                    not_get_snippet_fields:

                    if (0 === strpos($pathinfo, '/admin/api/snippet-types')) {
                        // cget_snippet-types
                        if (preg_match('#^/admin/api/snippet\\-types(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'cget_snippet-types')), array (  '_controller' => 'Sulu\\Bundle\\SnippetBundle\\Controller\\SnippetTypesController::cgetAction',  '_format' => 'json',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_cget_snippettypes;
                            }

                            return $ret;
                        }
                        not_cget_snippettypes:

                        // get_snippet-types
                        if (preg_match('#^/admin/api/snippet\\-types(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_snippet-types')), array (  '_controller' => 'Sulu\\Bundle\\SnippetBundle\\Controller\\SnippetTypesController::cgetAction',  '_format' => 'json',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_get_snippettypes;
                            }

                            return $ret;
                        }
                        not_get_snippettypes:

                        // put_snippet-types_default
                        if (preg_match('#^/admin/api/snippet\\-types/(?P<key>[^/]++)/default(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_snippet-types_default')), array (  '_controller' => 'Sulu\\Bundle\\SnippetBundle\\Controller\\SnippetTypesController::putDefaultAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('PUT'))) {
                                $allow = array_merge($allow, array('PUT'));
                                goto not_put_snippettypes_default;
                            }

                            return $ret;
                        }
                        not_put_snippettypes_default:

                        // delete_snippet-types_default
                        if (preg_match('#^/admin/api/snippet\\-types/(?P<key>[^/]++)/default(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_snippet-types_default')), array (  '_controller' => 'Sulu\\Bundle\\SnippetBundle\\Controller\\SnippetTypesController::deleteDefaultAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('DELETE'))) {
                                $allow = array_merge($allow, array('DELETE'));
                                goto not_delete_snippettypes_default;
                            }

                            return $ret;
                        }
                        not_delete_snippettypes_default:

                    }

                    elseif (0 === strpos($pathinfo, '/admin/api/snippet-areas')) {
                        // get_snippet-areas
                        if (preg_match('#^/admin/api/snippet\\-areas(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_snippet-areas')), array (  '_controller' => 'Sulu\\Bundle\\SnippetBundle\\Controller\\SnippetAreaController::cgetAction',  '_format' => 'json',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_get_snippetareas;
                            }

                            return $ret;
                        }
                        not_get_snippetareas:

                        // put_snippet-area
                        if (preg_match('#^/admin/api/snippet\\-areas/(?P<key>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_snippet-area')), array (  '_controller' => 'Sulu\\Bundle\\SnippetBundle\\Controller\\SnippetAreaController::putAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('PUT'))) {
                                $allow = array_merge($allow, array('PUT'));
                                goto not_put_snippetarea;
                            }

                            return $ret;
                        }
                        not_put_snippetarea:

                        // delete_snippet-area
                        if (preg_match('#^/admin/api/snippet\\-areas/(?P<key>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_snippet-area')), array (  '_controller' => 'Sulu\\Bundle\\SnippetBundle\\Controller\\SnippetAreaController::deleteAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('DELETE'))) {
                                $allow = array_merge($allow, array('DELETE'));
                                goto not_delete_snippetarea;
                            }

                            return $ret;
                        }
                        not_delete_snippetarea:

                    }

                }

                // get_languages
                if (0 === strpos($pathinfo, '/admin/api/languages') && preg_match('#^/admin/api/languages(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_languages')), array (  '_controller' => 'Sulu\\Bundle\\SnippetBundle\\Controller\\LanguageController::cgetAction',  '_format' => 'json',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_get_languages;
                    }

                    return $ret;
                }
                not_get_languages:

                // get_localizations
                if (0 === strpos($pathinfo, '/admin/api/localizations') && preg_match('#^/admin/api/localizations(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_localizations')), array (  '_controller' => 'Sulu\\Bundle\\CoreBundle\\Controller\\LocalizationController::cgetAction',  '_format' => 'json',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_get_localizations;
                    }

                    return $ret;
                }
                not_get_localizations:

                if (0 === strpos($pathinfo, '/admin/api/blacklist-items')) {
                    // sulu_community.fields_blacklist-item
                    if (0 === strpos($pathinfo, '/admin/api/blacklist-items/fields') && preg_match('#^/admin/api/blacklist\\-items/fields(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_community.fields_blacklist-item')), array (  '_controller' => 'Sulu\\Bundle\\CommunityBundle\\Controller\\BlacklistItemController::fieldsAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_sulu_communityfields_blacklistitem;
                        }

                        return $ret;
                    }
                    not_sulu_communityfields_blacklistitem:

                    // sulu_community.get_blacklist-items
                    if (preg_match('#^/admin/api/blacklist\\-items(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_community.get_blacklist-items')), array (  '_controller' => 'Sulu\\Bundle\\CommunityBundle\\Controller\\BlacklistItemController::cgetAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_sulu_communityget_blacklistitems;
                        }

                        return $ret;
                    }
                    not_sulu_communityget_blacklistitems:

                    // sulu_community.get_blacklist-item
                    if (preg_match('#^/admin/api/blacklist\\-items/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_community.get_blacklist-item')), array (  '_controller' => 'Sulu\\Bundle\\CommunityBundle\\Controller\\BlacklistItemController::getAction',  '_format' => 'json',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_sulu_communityget_blacklistitem;
                        }

                        return $ret;
                    }
                    not_sulu_communityget_blacklistitem:

                    // sulu_community.post_blacklist-item
                    if (preg_match('#^/admin/api/blacklist\\-items(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_community.post_blacklist-item')), array (  '_controller' => 'Sulu\\Bundle\\CommunityBundle\\Controller\\BlacklistItemController::postAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_sulu_communitypost_blacklistitem;
                        }

                        return $ret;
                    }
                    not_sulu_communitypost_blacklistitem:

                    // sulu_community.delete_blacklist-item
                    if (preg_match('#^/admin/api/blacklist\\-items/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_community.delete_blacklist-item')), array (  '_controller' => 'Sulu\\Bundle\\CommunityBundle\\Controller\\BlacklistItemController::deleteAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_sulu_communitydelete_blacklistitem;
                        }

                        return $ret;
                    }
                    not_sulu_communitydelete_blacklistitem:

                    // sulu_community.delete_blacklist-items
                    if (preg_match('#^/admin/api/blacklist\\-items(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_community.delete_blacklist-items')), array (  '_controller' => 'Sulu\\Bundle\\CommunityBundle\\Controller\\BlacklistItemController::cdeleteAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_sulu_communitydelete_blacklistitems;
                        }

                        return $ret;
                    }
                    not_sulu_communitydelete_blacklistitems:

                    // sulu_community.put_blacklist-item
                    if (preg_match('#^/admin/api/blacklist\\-items/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_community.put_blacklist-item')), array (  '_controller' => 'Sulu\\Bundle\\CommunityBundle\\Controller\\BlacklistItemController::putAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_sulu_communityput_blacklistitem;
                        }

                        return $ret;
                    }
                    not_sulu_communityput_blacklistitem:

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/se')) {
                if (0 === strpos($pathinfo, '/admin/security')) {
                    if (0 === strpos($pathinfo, '/admin/security/template')) {
                        // sulu_security.template.role.form
                        if ('/admin/security/template/role/form.html' === $pathinfo) {
                            return array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\TemplateController::roleFormAction',  '_route' => 'sulu_security.template.role.form',);
                        }

                        // sulu_security.template.role.list
                        if ('/admin/security/template/role/list.html' === $pathinfo) {
                            return array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\TemplateController::roleListAction',  '_route' => 'sulu_security.template.role.list',);
                        }

                        // sulu_security.template.permission.form
                        if ('/admin/security/template/permission/form.html' === $pathinfo) {
                            return array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\TemplateController::permissionformAction',  '_route' => 'sulu_security.template.permission.form',);
                        }

                        // sulu_security.permission_tab.form
                        if ('/admin/security/template/permission-tab/form.html' === $pathinfo) {
                            return array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\TemplateController::permissionTabFormAction',  '_route' => 'sulu_security.permission_tab.form',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/security/reset/email')) {
                        // sulu_security.reset_password.email
                        if ('/admin/security/reset/email' === $pathinfo) {
                            return array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'sulu_security.reset_password.email',);
                        }

                        // sulu_security.reset_password.email.resend
                        if ('/admin/security/reset/email/resend' === $pathinfo) {
                            return array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\ResettingController::sendEmailAction',  'generateNewKey' => 'false',  '_route' => 'sulu_security.reset_password.email.resend',);
                        }

                    }

                    // sulu_security.reset_password.reset
                    if ('/admin/security/reset' === $pathinfo) {
                        return array (  '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\ResettingController::resetAction',  '_route' => 'sulu_security.reset_password.reset',);
                    }

                    // put_profile_language
                    if (0 === strpos($pathinfo, '/admin/security/profile/language') && preg_match('#^/admin/security/profile/language(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_profile_language')), array (  '_controller' => 'sulu_security.profile_controller:putLanguageAction',  '_format' => 'json',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_put_profile_language;
                        }

                        return $ret;
                    }
                    not_put_profile_language:

                    if (0 === strpos($pathinfo, '/admin/security/profile/settings')) {
                        // put_profile_settings
                        if (preg_match('#^/admin/security/profile/settings(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'put_profile_settings')), array (  '_controller' => 'sulu_security.profile_controller:putSettingsAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('PUT'))) {
                                $allow = array_merge($allow, array('PUT'));
                                goto not_put_profile_settings;
                            }

                            return $ret;
                        }
                        not_put_profile_settings:

                        // delete_profile_settings
                        if (preg_match('#^/admin/security/profile/settings(?:\\.(?P<_format>json|csv|html))?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_profile_settings')), array (  '_controller' => 'sulu_security.profile_controller:deleteSettingsAction',  '_format' => 'json',));
                            if (!in_array($requestMethod, array('DELETE'))) {
                                $allow = array_merge($allow, array('DELETE'));
                                goto not_delete_profile_settings;
                            }

                            return $ret;
                        }
                        not_delete_profile_settings:

                    }

                }

                // sulu_search_categories
                if ('/admin/search/indexes' === $pathinfo) {
                    return array (  '_controller' => 'sulu_search.controller.search:indexesAction',  '_format' => 'json',  '_route' => 'sulu_search_categories',);
                }

                // sulu_search_search
                if ('/admin/search/query' === $pathinfo) {
                    return array (  '_controller' => 'sulu_search.controller.search:searchAction',  '_format' => 'json',  '_route' => 'sulu_search_search',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/media/template')) {
                // sulu_media.template.collection.settings
                if ('/admin/media/template/collection/settings.html' === $pathinfo) {
                    return array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\TemplateController::collectionSettingsAction',  '_route' => 'sulu_media.template.collection.settings',);
                }

                // sulu_media.template.collection.new
                if ('/admin/media/template/collection/new.html' === $pathinfo) {
                    return array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\TemplateController::collectionNewAction',  '_route' => 'sulu_media.template.collection.new',);
                }

                // sulu_media.template.media.multiple_edit
                if ('/admin/media/template/media/multiple-edit.html' === $pathinfo) {
                    return array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\TemplateController::multipleEditAction',  '_route' => 'sulu_media.template.media.multiple_edit',);
                }

            }

            // sulu_media.redirect
            if (0 === strpos($pathinfo, '/admin/media/redirect/media') && preg_match('#^/admin/media/redirect/media/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_media.redirect')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaRedirectController::redirectAction',));
            }

        }

        // sulu_media.website.image.proxy
        if (0 === strpos($pathinfo, '/uploads/media') && preg_match('#^/uploads/media/(?P<slug>.*)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_media.website.image.proxy')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaStreamController::getImageAction',  '_requestAnalyzer' => false,));
        }

        // sulu_media.website.media.download
        if (0 === strpos($pathinfo, '/media') && preg_match('#^/media/(?P<id>[^/]++)/download/(?P<slug>.*)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sulu_media.website.media.download')), array (  '_controller' => 'Sulu\\Bundle\\MediaBundle\\Controller\\MediaStreamController::downloadAction',  '_requestAnalyzer' => false,));
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
