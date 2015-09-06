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

        // nelmio_api_doc_index
        if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_nelmio_api_doc_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
        }
        not_nelmio_api_doc_index:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/media/cache/avatar_')) {
            // _imagine_avatar_med
            if (0 === strpos($pathinfo, '/media/cache/avatar_med') && preg_match('#^/media/cache/avatar_med/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_avatar_med;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_avatar_med')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'avatar_med',));
            }
            not__imagine_avatar_med:

            // _imagine_avatar_xsmall
            if (0 === strpos($pathinfo, '/media/cache/avatar_xsmall') && preg_match('#^/media/cache/avatar_xsmall/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_avatar_xsmall;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_avatar_xsmall')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'avatar_xsmall',));
            }
            not__imagine_avatar_xsmall:

        }

        // oro_default
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'oro_default');
            }

            return array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::viewAction',  '_route' => 'oro_default',);
        }

        if (0 === strpos($pathinfo, '/ui')) {
            // oro_ui_index
            if ($pathinfo === '/ui') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:index.html.twig',  '_route' => 'oro_ui_index',);
            }

            if (0 === strpos($pathinfo, '/ui/1column')) {
                // oro_ui_1column
                if ($pathinfo === '/ui/1column') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:oneColumn.html.twig',  '_route' => 'oro_ui_1column',);
                }

                if (0 === strpos($pathinfo, '/ui/1column-')) {
                    // oro_ui_1column_menu
                    if ($pathinfo === '/ui/1column-menu') {
                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:oneColumnMenu.html.twig',  '_route' => 'oro_ui_1column_menu',);
                    }

                    // oro_ui_1column_toolbar
                    if ($pathinfo === '/ui/1column-toolbar') {
                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:oneColumnWithToolbar.html.twig',  '_route' => 'oro_ui_1column_toolbar',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/ui/2columns-')) {
                // oro_ui_2columns_left
                if ($pathinfo === '/ui/2columns-left') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:twoColumnLeft.html.twig',  '_route' => 'oro_ui_2columns_left',);
                }

                // oro_ui_2columns_right
                if ($pathinfo === '/ui/2columns-right') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:twoColumnRight.html.twig',  '_route' => 'oro_ui_2columns_right',);
                }

            }

            // oro_ui_3columns
            if ($pathinfo === '/ui/3columns') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:threeColumn.html.twig',  '_route' => 'oro_ui_3columns',);
            }

            // oro_ui_forgot_password
            if ($pathinfo === '/ui/forgot-password') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:forgotPassword.html.twig',  '_route' => 'oro_ui_forgot_password',);
            }

            // oro_ui_login
            if ($pathinfo === '/ui/login') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:loginPage.html.twig',  '_route' => 'oro_ui_login',);
            }

            // oro_ui_registration
            if ($pathinfo === '/ui/registration') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:registrationPage.html.twig',  '_route' => 'oro_ui_registration',);
            }

            // oro_ui_404
            if ($pathinfo === '/ui/404') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:Page404.html.twig',  '_route' => 'oro_ui_404',);
            }

            // oro_ui_503
            if ($pathinfo === '/ui/503') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:Page503.html.twig',  '_route' => 'oro_ui_503',);
            }

            // oro_ui_form_elements
            if ($pathinfo === '/ui/form-elements') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:formElements.html.twig',  '_route' => 'oro_ui_form_elements',);
            }

            // oro_ui_messages
            if ($pathinfo === '/ui/messages') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:systemMessages.html.twig',  '_route' => 'oro_ui_messages',);
            }

            // oro_ui_buttons
            if ($pathinfo === '/ui/buttons') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:buttonsPage.html.twig',  '_route' => 'oro_ui_buttons',);
            }

            // oro_ui_tables
            if ($pathinfo === '/ui/tables') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:tablesPage.html.twig',  '_route' => 'oro_ui_tables',);
            }

            // oro_ui_general_elements
            if ($pathinfo === '/ui/general-elements') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:generalElements.html.twig',  '_route' => 'oro_ui_general_elements',);
            }

            // oro_ui_dialog_styled
            if ($pathinfo === '/ui/dialog-styled') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:dialogStyledPage.html.twig',  '_route' => 'oro_ui_dialog_styled',);
            }

            if (0 === strpos($pathinfo, '/ui/grid-page')) {
                // oro_ui_grid_page
                if ($pathinfo === '/ui/grid-page') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:gridPage.html.twig',  '_route' => 'oro_ui_grid_page',);
                }

                // oro_ui_grid_without_bar_page
                if ($pathinfo === '/ui/grid-page-withoutabr') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:gridPageWithoutBar.html.twig',  '_route' => 'oro_ui_grid_without_bar_page',);
                }

            }

            // oro_ui_record_edit
            if ($pathinfo === '/ui/record-edit') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:RecordEdit.html.twig',  '_route' => 'oro_ui_record_edit',);
            }

            // oro_ui_title_bar
            if ($pathinfo === '/ui/entity-title-bar') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:EntityTitleBar.html.twig',  '_route' => 'oro_ui_title_bar',);
            }

            // oro_ui_form_horizontal
            if ($pathinfo === '/ui/form-horizontal') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:formHorizontal.html.twig',  '_route' => 'oro_ui_form_horizontal',);
            }

        }

        if (0 === strpos($pathinfo, '/organization')) {
            if (0 === strpos($pathinfo, '/organization/business_unit')) {
                // oro_business_unit_create
                if ($pathinfo === '/organization/business_unit/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::createAction',  '_route' => 'oro_business_unit_create',);
                }

                // oro_business_unit_view
                if (0 === strpos($pathinfo, '/organization/business_unit/view') && preg_match('#^/organization/business_unit/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_view')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::viewAction',));
                }

                // oro_business_unit_search
                if (0 === strpos($pathinfo, '/organization/business_unit/search') && preg_match('#^/organization/business_unit/search/(?P<organizationId>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_search')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::searchAction',));
                }

                // oro_business_unit_update
                if (0 === strpos($pathinfo, '/organization/business_unit/update') && preg_match('#^/organization/business_unit/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::updateAction',));
                }

                // oro_business_unit_index
                if (preg_match('#^/organization/business_unit(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::indexAction',));
                }

                if (0 === strpos($pathinfo, '/organization/business_unit/widget')) {
                    // oro_business_unit_widget_info
                    if (0 === strpos($pathinfo, '/organization/business_unit/widget/info') && preg_match('#^/organization/business_unit/widget/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_widget_info')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::infoAction',));
                    }

                    // oro_business_unit_widget_users
                    if (0 === strpos($pathinfo, '/organization/business_unit/widget/users') && preg_match('#^/organization/business_unit/widget/users/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_widget_users')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::usersAction',));
                    }

                }

            }

            // oro_organization_update_current
            if ($pathinfo === '/organization/update_current') {
                return array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\OrganizationController::updateCurrentAction',  '_route' => 'oro_organization_update_current',);
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_businessunits
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunits(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_businessunits;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_businessunits')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_businessunits:

            // oro_api_post_businessunit
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunits(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_businessunit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_businessunit:

            // oro_api_put_businessunit
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_businessunit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_businessunit:

            // oro_api_get_businessunit
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_businessunit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_businessunit:

            // oro_api_delete_businessunit
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_businessunit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_businessunit:

            // oro_api_options_businessunits
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunits(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_businessunits;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_businessunits')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_businessunits:

            // oro_api_options_businessunits_auto_823
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunit(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_businessunits_auto_823;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_businessunits_auto_823')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_businessunits_auto_823:

            // oro_api_post_businessunit_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunit(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_businessunit_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_businessunit_deprecated')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_businessunit_deprecated:

        }

        if (0 === strpos($pathinfo, '/security')) {
            // oro_security_access_levels
            if (0 === strpos($pathinfo, '/security/acl-access-levels') && preg_match('#^/security/acl\\-access\\-levels/(?P<oid>\\w+:[\\w\\(\\)]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_security_access_levels')), array (  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\SecurityBundle\\Controller\\AclPermissionController::aclAccessLevelsAction',));
            }

            // oro_security_switch_organization
            if (0 === strpos($pathinfo, '/security/switch-organization') && preg_match('#^/security/switch\\-organization(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_security_switch_organization')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\SecurityBundle\\Controller\\AclPermissionController::switchOrganizationAction',));
            }

        }

        // oro_attachment_api_rest_file_get
        if (0 === strpos($pathinfo, '/files') && preg_match('#^/files/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_oro_attachment_api_rest_file_get;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attachment_api_rest_file_get')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\FileController::getAction',));
        }
        not_oro_attachment_api_rest_file_get:

        if (0 === strpos($pathinfo, '/attachment')) {
            // oro_attachment_widget_attachments
            if (0 === strpos($pathinfo, '/attachment/view/widget') && preg_match('#^/attachment/view/widget/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attachment_widget_attachments')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\AttachmentController::widgetAction',));
            }

            // oro_attachment_create
            if (0 === strpos($pathinfo, '/attachment/create') && preg_match('#^/attachment/create/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attachment_create')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\AttachmentController::createAction',));
            }

            // oro_attachment_update
            if (0 === strpos($pathinfo, '/attachment/update') && preg_match('#^/attachment/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attachment_update')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\AttachmentController::updateAction',));
            }

            // oro_attachment_file
            if (preg_match('#^/attachment/(?P<codedString>[^/\\.]++)\\.(?P<extension>\\w+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_attachment_file')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\FileController::getAttachmentAction',));
            }

        }

        if (0 === strpos($pathinfo, '/media/cache/attachment/resize')) {
            // oro_resize_attachment
            if (preg_match('#^/media/cache/attachment/resize/(?P<id>\\d+)/(?P<width>\\d+)/(?P<height>\\d+)/(?P<filename>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_resize_attachment')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\FileController::getResizedAttachmentImageAction',));
            }

            // oro_filtered_attachment
            if (preg_match('#^/media/cache/attachment/resize/(?P<id>\\d+)/(?P<filter>[^/]++)/(?P<filename>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_filtered_attachment')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\FileController::getFilteredImageAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_attachment
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/attachments/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_attachment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_attachment')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\AttachmentController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_attachment:

            // oro_api_delete_attachment
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/attachments/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_attachment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_attachment')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\AttachmentController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_attachment:

            // oro_api_options_attachments
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/attachments(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_attachments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_attachments')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\AttachmentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_attachments:

            // oro_api_options_attachments_auto_824
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/attachment(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_attachments_auto_824;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_attachments_auto_824')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\AttachmentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_attachments_auto_824:

            // oro_api_get_file
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/files/(?P<key>[^/\\.]++)(?:\\.(?P<_format>json|binary))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_file;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_file')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\FileController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_file:

            // oro_api_options_files
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/files(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_files;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_files')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\FileController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_files:

            // oro_api_options_files_auto_825
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/file(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_files_auto_825;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_files_auto_825')), array (  '_controller' => 'Oro\\Bundle\\AttachmentBundle\\Controller\\Api\\Rest\\FileController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_files_auto_825:

        }

        if (0 === strpos($pathinfo, '/email')) {
            // oro_email_api_rest_emailtemplate_delete
            if ($pathinfo === '/email/') {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_email_api_rest_emailtemplate_delete;
                }

                return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::deleteAction',  '_route' => 'oro_email_api_rest_emailtemplate_delete',);
            }
            not_oro_email_api_rest_emailtemplate_delete:

            if (0 === strpos($pathinfo, '/email/emailtemplates')) {
                // oro_email_api_rest_emailtemplate_cget
                if (0 === strpos($pathinfo, '/email/emailtemplates/list') && preg_match('#^/email/emailtemplates/list(?:/(?P<entityName>\\w+)(?:/(?P<includeNonEntity>\\d+)(?:/(?P<includeSystemTemplates>\\d+))?)?)?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_email_api_rest_emailtemplate_cget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_api_rest_emailtemplate_cget')), array (  'entityName' => NULL,  'includeNonEntity' => false,  'includeSystemTemplates' => true,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::cgetAction',));
                }
                not_oro_email_api_rest_emailtemplate_cget:

                // oro_email_api_rest_emailtemplate_getvariables
                if ($pathinfo === '/email/emailtemplates/variables') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_email_api_rest_emailtemplate_getvariables;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getVariablesAction',  '_route' => 'oro_email_api_rest_emailtemplate_getvariables',);
                }
                not_oro_email_api_rest_emailtemplate_getvariables:

                // oro_email_api_rest_emailtemplate_getcompiled
                if (0 === strpos($pathinfo, '/email/emailtemplates/compiled') && preg_match('#^/email/emailtemplates/compiled/(?P<id>\\d+)(?:/(?P<entityId>\\d*))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_email_api_rest_emailtemplate_getcompiled;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_api_rest_emailtemplate_getcompiled')), array (  'entityId' => NULL,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getCompiledAction',));
                }
                not_oro_email_api_rest_emailtemplate_getcompiled:

            }

            if (0 === strpos($pathinfo, '/email/autoresponserule')) {
                // oro_email_autoresponserule_create
                if (0 === strpos($pathinfo, '/email/autoresponserule/create') && preg_match('#^/email/autoresponserule/create(?:/(?P<mailbox>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_autoresponserule_create')), array (  'mailbox' => NULL,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\AutoResponseRuleController::createAction',));
                }

                // oro_email_autoresponserule_update
                if (0 === strpos($pathinfo, '/email/autoresponserule/update') && preg_match('#^/email/autoresponserule/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_autoresponserule_update')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\AutoResponseRuleController::updateAction',));
                }

            }

            // oro_email_view
            if (0 === strpos($pathinfo, '/email/view') && preg_match('#^/email/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_view')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::viewAction',));
            }

            // oro_email_last
            if ($pathinfo === '/email/last') {
                return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::lastAction',  '_route' => 'oro_email_last',);
            }

            // oro_email_thread_view
            if (0 === strpos($pathinfo, '/email/view/thread') && preg_match('#^/email/view/thread/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_thread_view')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::viewThreadAction',));
            }

            // oro_email_thread_widget
            if (0 === strpos($pathinfo, '/email/widget/thread') && preg_match('#^/email/widget/thread/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_thread_widget')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::threadWidgetAction',));
            }

            if (0 === strpos($pathinfo, '/email/view-')) {
                // oro_email_items_view
                if ($pathinfo === '/email/view-items') {
                    return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::itemsAction',  '_route' => 'oro_email_items_view',);
                }

                // oro_email_view_group
                if (0 === strpos($pathinfo, '/email/view-group') && preg_match('#^/email/view\\-group/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_view_group')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::viewGroupAction',));
                }

            }

            // oro_email_activity_view
            if (0 === strpos($pathinfo, '/email/activity/view') && preg_match('#^/email/activity/view/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_activity_view')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::activityAction',));
            }

            // oro_email_email_create
            if ($pathinfo === '/email/create') {
                return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::createAction',  '_route' => 'oro_email_email_create',);
            }

            if (0 === strpos($pathinfo, '/email/reply')) {
                // oro_email_email_reply
                if (preg_match('#^/email/reply/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_email_reply')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::replyAction',));
                }

                // oro_email_email_reply_all
                if (0 === strpos($pathinfo, '/email/replyall') && preg_match('#^/email/replyall/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_email_reply_all')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::replyAllAction',));
                }

            }

            // oro_email_email_forward
            if (0 === strpos($pathinfo, '/email/forward') && preg_match('#^/email/forward/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_email_forward')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::forwardAction',));
            }

            // oro_email_body
            if (0 === strpos($pathinfo, '/email/body') && preg_match('#^/email/body/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_body')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::bodyAction',));
            }

            if (0 === strpos($pathinfo, '/email/attachment')) {
                // oro_email_attachment
                if (preg_match('#^/email/attachment/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_attachment')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::attachmentAction',));
                }

                // oro_email_attachment_link
                if (preg_match('#^/email/attachment/(?P<id>\\d+)/link$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_attachment_link')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::linkAction',));
                }

            }

            // oro_email_widget_emails
            if ($pathinfo === '/email/widget') {
                return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::emailsAction',  '_route' => 'oro_email_widget_emails',);
            }

            // oro_email_widget_base_emails
            if ($pathinfo === '/email/base-widget') {
                return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::baseEmailsAction',  '_route' => 'oro_email_widget_base_emails',);
            }

            if (0 === strpos($pathinfo, '/email/user-')) {
                // oro_email_user_emails
                if ($pathinfo === '/email/user-emails') {
                    return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::userEmailsAction',  '_route' => 'oro_email_user_emails',);
                }

                // oro_email_user_sync_emails
                if ($pathinfo === '/email/user-sync-emails') {
                    return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::userEmailsSyncAction',  '_route' => 'oro_email_user_sync_emails',);
                }

            }

            if (0 === strpos($pathinfo, '/email/context')) {
                // oro_email_context
                if (preg_match('#^/email/context/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_context')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::contextAction',));
                }

                // oro_email_context_grid
                if (0 === strpos($pathinfo, '/email/context/grid') && preg_match('#^/email/context/grid/(?P<activityId>[^/]++)(?:/(?P<entityClass>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_context_grid')), array (  'entityClass' => NULL,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::contextGridAction',));
                }

            }

            // oro_email_toggle_seen
            if (0 === strpos($pathinfo, '/email/toggle-seen') && preg_match('#^/email/toggle\\-seen/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_toggle_seen')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::toggleSeenAction',));
            }

            if (0 === strpos($pathinfo, '/email/mark')) {
                // oro_email_mark_seen
                if (0 === strpos($pathinfo, '/email/mark-seen') && preg_match('#^/email/mark\\-seen/(?P<id>\\d+)/(?P<status>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_mark_seen')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::markSeenAction',));
                }

                // oro_email_mark_all_as_seen
                if ($pathinfo === '/email/mark_all_as_seen') {
                    return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::markAllEmailsAsSeenAction',  '_route' => 'oro_email_mark_all_as_seen',);
                }

            }

            // oro_email_mark_massaction
            if (preg_match('#^/email/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_mark_massaction')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::markMassAction',));
            }

            // oro_email_autocomplete_recipient
            if ($pathinfo === '/email/autocomplete-recipient') {
                return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::autocompleteRecipientAction',  '_route' => 'oro_email_autocomplete_recipient',);
            }

            if (0 === strpos($pathinfo, '/email/emailtemplate')) {
                // oro_email_emailtemplate_index
                if (preg_match('#^/email/emailtemplate(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::indexAction',));
                }

                // oro_email_emailtemplate_update
                if (0 === strpos($pathinfo, '/email/emailtemplate/update') && preg_match('#^/email/emailtemplate/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_update')), array (  'id' => 0,  'isClone' => false,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::updateAction',));
                }

                if (0 === strpos($pathinfo, '/email/emailtemplate/c')) {
                    // oro_email_emailtemplate_create
                    if ($pathinfo === '/email/emailtemplate/create') {
                        return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::createAction',  '_route' => 'oro_email_emailtemplate_create',);
                    }

                    // oro_email_emailtemplate_clone
                    if (0 === strpos($pathinfo, '/email/emailtemplate/clone') && preg_match('#^/email/emailtemplate/clone(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_clone')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::cloneAction',));
                    }

                }

                // oro_email_emailtemplate_preview
                if (0 === strpos($pathinfo, '/email/emailtemplate/preview') && preg_match('#^/email/emailtemplate/preview(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_preview')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::previewAction',));
                }

            }

        }

        // oro_email_dashboard_recent_emails
        if (0 === strpos($pathinfo, '/dashboard/recent_emails') && preg_match('#^/dashboard/recent_emails/(?P<widget>[\\w-]+)(?:/(?P<activeTab>inbox|sent|new)(?:/(?P<contentType>full|tab))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_dashboard_recent_emails')), array (  'activeTab' => 'inbox',  'contentType' => 'full',  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Dashboard\\DashboardController::recentEmailsAction',));
        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_emails
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emails(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emails;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emails')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emails:

            // oro_api_get_email
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emails/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_email;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_email')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_email:

            // oro_api_put_email
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emails/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_email;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_email')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_email:

            // oro_api_post_email
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emails(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_email;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_email')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_email:

            // oro_api_get_email_context
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emails/(?P<id>[^/]++)/context(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_email_context;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_email_context')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::getContextAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_email_context:

            // oro_api_options_emails
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emails(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_emails;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emails')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_emails:

            // oro_api_options_emails_auto_826
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/email(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_emails_auto_826;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emails_auto_826')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_emails_auto_826:

            // oro_api_delete_autoresponserule
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/autoresponserules/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_autoresponserule;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_autoresponserule')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\AutoResponseRuleController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_autoresponserule:

            // oro_api_options_autoresponserules
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/autoresponserules(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_autoresponserules;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_autoresponserules')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\AutoResponseRuleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_autoresponserules:

            // oro_api_options_autoresponserules_auto_827
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/autoresponserule(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_autoresponserules_auto_827;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_autoresponserules_auto_827')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\AutoResponseRuleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_autoresponserules_auto_827:

            // oro_api_get_emailorigins
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailorigins(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emailorigins;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailorigins')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailOriginController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emailorigins:

            // oro_api_get_emailorigin
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailorigins/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emailorigin;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailorigin')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailOriginController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emailorigin:

            // oro_api_options_emailorigins
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailorigins(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_emailorigins;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailorigins')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailOriginController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_emailorigins:

            // oro_api_options_emailorigins_auto_828
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailorigin(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_emailorigins_auto_828;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailorigins_auto_828')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailOriginController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_emailorigins_auto_828:

            // oro_api_delete_emailtemplate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplates/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_emailtemplate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_emailtemplate')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_emailtemplate:

            // oro_api_get_emailtemplates
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplates/list(?:/(?P<entityName>\\w+)(?:/(?P<includeNonEntity>\\d+)(?:/(?P<includeSystemTemplates>\\d+)(?:\\.(?P<_format>json))?)?)?)?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emailtemplates;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailtemplates')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::cgetAction',  'entityName' => NULL,  'includeNonEntity' => false,  'includeSystemTemplates' => true,  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emailtemplates:

            // oro_api_get_emailtemplate_variables
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplates/variables(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emailtemplate_variables;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailtemplate_variables')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getVariablesAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emailtemplate_variables:

            // oro_api_get_emailtemplate_compiled
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplates/compiled/(?P<id>\\d+)/(?P<entityId>\\d*)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emailtemplate_compiled;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailtemplate_compiled')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getCompiledAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emailtemplate_compiled:

            // oro_api_options_emailtemplates
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplates(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_emailtemplates;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailtemplates')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_emailtemplates:

            // oro_api_options_emailtemplates_auto_829
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplate(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_emailtemplates_auto_829;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailtemplates_auto_829')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_emailtemplates_auto_829:

            // oro_api_get_email_activity_relations_by_filters
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/emails/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_email_activity_relations_by_filters;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_email_activity_relations_by_filters')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivityController::cgetByFiltersAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_email_activity_relations_by_filters:

            // oro_api_options_email_activity_relations
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/email/activity/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_email_activity_relations;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_email_activity_relations')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivityController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_email_activity_relations:

            // oro_api_options_email_search_relations
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/email/search/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_email_search_relations;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_email_search_relations')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivitySearchController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_email_search_relations:

            // oro_api_get_activity_email_suggestions
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/emails/(?P<id>\\d+)/suggestions(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_activity_email_suggestions;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_email_suggestions')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivitySuggestionController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_activity_email_suggestions:

            // oro_api_options_activity_email_suggestions
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/activity/email/suggestions(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_activity_email_suggestions;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_email_suggestions')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivitySuggestionController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_activity_email_suggestions:

            // oro_api_options_activity_email_suggestions_auto_830
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/activity/email/suggestion(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_activity_email_suggestions_auto_830;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_email_suggestions_auto_830')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivitySuggestionController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_activity_email_suggestions_auto_830:

        }

        if (0 === strpos($pathinfo, '/config/mailbox')) {
            // oro_email_mailbox_update
            if (0 === strpos($pathinfo, '/config/mailbox/update') && preg_match('#^/config/mailbox/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_mailbox_update')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Configuration\\MailboxController::updateAction',));
            }

            // oro_email_mailbox_create
            if (0 === strpos($pathinfo, '/config/mailbox/create') && preg_match('#^/config/mailbox/create(?:/(?P<organization_id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_mailbox_create')), array (  'organization_id' => NULL,  'organization' => NULL,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Configuration\\MailboxController::createAction',));
            }

            // oro_email_mailbox_delete
            if (0 === strpos($pathinfo, '/config/mailbox/delete') && preg_match('#^/config/mailbox/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_email_mailbox_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_mailbox_delete')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Configuration\\MailboxController::deleteAction',));
            }
            not_oro_email_mailbox_delete:

            // oro_email_mailbox_users_search
            if (0 === strpos($pathinfo, '/config/mailbox/users/search') && preg_match('#^/config/mailbox/users/search/(?P<organizationId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_mailbox_users_search')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Configuration\\MailboxController::searchUsersAction',));
            }

        }

        // oro_user_google_login
        if ($pathinfo === '/login/check-google') {
            return array('_route' => 'oro_user_google_login');
        }

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user/group')) {
                // oro_user_group_create
                if ($pathinfo === '/user/group/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::createAction',  '_route' => 'oro_user_group_create',);
                }

                // oro_user_group_update
                if (0 === strpos($pathinfo, '/user/group/update') && preg_match('#^/user/group/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_group_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::updateAction',));
                }

                // oro_user_group_index
                if (preg_match('#^/user/group(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_group_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::indexAction',));
                }

            }

            // oro_user_reset_request
            if ($pathinfo === '/user/reset-request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_user_reset_request;
                }

                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::requestAction',  '_route' => 'oro_user_reset_request',);
            }
            not_oro_user_reset_request:

            if (0 === strpos($pathinfo, '/user/send-email')) {
                // oro_user_reset_send_email
                if ($pathinfo === '/user/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_user_reset_send_email;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::sendEmailAction',  '_route' => 'oro_user_reset_send_email',);
                }
                not_oro_user_reset_send_email:

                // oro_user_reset_send_email_as_admin
                if (0 === strpos($pathinfo, '/user/send-email-as-admin') && preg_match('#^/user/send\\-email\\-as\\-admin/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_reset_send_email_as_admin')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::sendEmailAsAdminAction',));
                }

            }

            // oro_user_reset_check_email
            if ($pathinfo === '/user/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_user_reset_check_email;
                }

                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::checkEmailAction',  '_route' => 'oro_user_reset_check_email',);
            }
            not_oro_user_reset_check_email:

            // oro_user_reset_reset
            if (0 === strpos($pathinfo, '/user/reset') && preg_match('#^/user/reset/(?P<token>\\w+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_oro_user_reset_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_reset_reset')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::resetAction',));
            }
            not_oro_user_reset_reset:

            // oro_user_reset_set_password
            if (0 === strpos($pathinfo, '/user/set-password') && preg_match('#^/user/set\\-password/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_oro_user_reset_set_password;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_reset_set_password')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::setPasswordAction',));
            }
            not_oro_user_reset_set_password:

            if (0 === strpos($pathinfo, '/user/role')) {
                // oro_user_role_create
                if ($pathinfo === '/user/role/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::createAction',  '_route' => 'oro_user_role_create',);
                }

                // oro_user_role_update
                if (0 === strpos($pathinfo, '/user/role/update') && preg_match('#^/user/role/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_role_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::updateAction',));
                }

                // oro_user_role_index
                if (preg_match('#^/user/role(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_role_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::indexAction',));
                }

            }

            if (0 === strpos($pathinfo, '/user/log')) {
                if (0 === strpos($pathinfo, '/user/login')) {
                    // oro_user_security_login
                    if ($pathinfo === '/user/login') {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'oro_user_security_login',);
                    }

                    // oro_user_security_check
                    if ($pathinfo === '/user/login-check') {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'oro_user_security_check',);
                    }

                }

                // oro_user_security_logout
                if ($pathinfo === '/user/logout') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'oro_user_security_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/user/status')) {
                // oro_user_status_list
                if (rtrim($pathinfo, '/') === '/user/status') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'oro_user_status_list');
                    }

                    return array (  'limit' => 10,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::indexAction',  '_route' => 'oro_user_status_list',);
                }

                // oro_user_status_create
                if ($pathinfo === '/user/status/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::createAction',  '_route' => 'oro_user_status_create',);
                }

                // oro_user_status_delete
                if (0 === strpos($pathinfo, '/user/status/delete') && preg_match('#^/user/status/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_status_delete')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::deleteAction',));
                }

                // oro_user_status_set_current
                if (0 === strpos($pathinfo, '/user/status/set-current') && preg_match('#^/user/status/set\\-current/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_status_set_current')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::setCurrentStatus',));
                }

                // oro_user_status_clear_current
                if ($pathinfo === '/user/status/clear-current') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::clearCurrentStatus',  '_route' => 'oro_user_status_clear_current',);
                }

            }

            // oro_user_view
            if (0 === strpos($pathinfo, '/user/view') && preg_match('#^/user/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_view')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::viewAction',));
            }

            if (0 === strpos($pathinfo, '/user/profile')) {
                // oro_user_profile_view
                if ($pathinfo === '/user/profile/view') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::viewProfileAction',  '_route' => 'oro_user_profile_view',);
                }

                // oro_user_profile_update
                if ($pathinfo === '/user/profile/edit') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::updateProfileAction',  '_route' => 'oro_user_profile_update',);
                }

            }

            // oro_user_apigen
            if (0 === strpos($pathinfo, '/user/apigen') && preg_match('#^/user/apigen/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_apigen')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::apigenAction',));
            }

            // oro_user_create
            if ($pathinfo === '/user/create') {
                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'oro_user_create',);
            }

            // oro_user_update
            if (0 === strpos($pathinfo, '/user/update') && preg_match('#^/user/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::updateAction',));
            }

            // oro_user_index
            if (preg_match('#^/user(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::indexAction',));
            }

            // oro_user_widget_info
            if (0 === strpos($pathinfo, '/user/widget/info') && preg_match('#^/user/widget/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_widget_info')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::infoAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_users
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_users;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_users')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_users:

            // oro_api_get_user
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_user:

            // oro_api_post_user
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_user:

            // oro_api_put_user
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_user:

            // oro_api_delete_user
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_user:

            // oro_api_get_user_roles
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/]++)/roles(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_user_roles;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_roles')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getRolesAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_user_roles:

            // oro_api_get_user_groups
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/]++)/groups(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_user_groups;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_groups')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getGroupsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_user_groups:

            // oro_api_get_user_filter
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/user/filter(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_user_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_filter')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getFilterAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_user_filter:

            // oro_api_options_users
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_users;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_users')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_users:

            // oro_api_options_users_auto_831
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/user(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_users_auto_831;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_users_auto_831')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_users_auto_831:

            // oro_api_get_roles
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_roles;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_roles')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_roles:

            // oro_api_get_role
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_role;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_role:

            // oro_api_post_role
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_role;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_role:

            // oro_api_put_role
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_role;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_role:

            // oro_api_delete_role
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_role;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_role:

            // oro_api_get_role_byname
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles/(?P<name>[^/]++)/byname(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_role_byname;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_role_byname')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::getBynameAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_role_byname:

            // oro_api_options_roles
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_roles;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_roles')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_roles:

            // oro_api_options_roles_auto_832
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/role(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_roles_auto_832;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_roles_auto_832')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_roles_auto_832:

            // oro_api_get_groups
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/groups(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_groups;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_groups')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_groups:

            // oro_api_get_group
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_group;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_group:

            // oro_api_post_group
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/groups(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_group;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_group:

            // oro_api_put_group
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_group;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_group:

            // oro_api_delete_group
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_group;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_group:

            // oro_api_options_groups
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/groups(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_groups;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_groups')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_groups:

            // oro_api_options_groups_auto_833
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/group(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_groups_auto_833;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_groups_auto_833')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_groups_auto_833:

            // oro_api_get_user_permissions
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/]++)/permissions(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_user_permissions;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_permissions')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserPermissionController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_user_permissions:

            // oro_api_options_user_permissions
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/user/permissions(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_user_permissions;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_user_permissions')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserPermissionController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_user_permissions:

            // oro_api_options_user_permissions_auto_834
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/user/permission(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_user_permissions_auto_834;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_user_permissions_auto_834')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserPermissionController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_user_permissions_auto_834:

            // oro_api_post_role_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/role(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_role_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_role_deprecated')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_role_deprecated:

            // oro_api_post_user_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/user(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_user_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_user_deprecated')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_user_deprecated:

            // oro_api_post_group_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/group(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_group_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_group_deprecated')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_group_deprecated:

        }

        // oro_sso_google_login
        if ($pathinfo === '/login/check-google') {
            return array('_route' => 'oro_sso_google_login');
        }

        // oro_entity_api_rest_entityfield_getfields
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_oro_entity_api_rest_entityfield_getfields;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'oro_entity_api_rest_entityfield_getfields');
            }

            return array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityFieldController::getFieldsAction',  '_route' => 'oro_entity_api_rest_entityfield_getfields',);
        }
        not_oro_entity_api_rest_entityfield_getfields:

        if (0 === strpos($pathinfo, '/dictionary')) {
            // oro_dictionary_search
            if (preg_match('#^/dictionary/(?P<dictionary>[^/]++)/search$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dictionary_search')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\DictionaryController::searchAction',));
            }

            // oro_dictionary_value
            if (preg_match('#^/dictionary/(?P<dictionary>[^/]++)/values$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dictionary_value')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\DictionaryController::valuesAction',));
            }

        }

        if (0 === strpos($pathinfo, '/entity')) {
            // oro_entity_index
            if (preg_match('#^/entity/(?P<entityName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_index')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::indexAction',));
            }

            // oro_entity_detailed
            if (0 === strpos($pathinfo, '/entity/detailed') && preg_match('#^/entity/detailed/(?P<id>[^/]++)/(?P<entityName>[^/]++)(?:/(?P<fieldName>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_detailed')), array (  'id' => 0,  'fieldName' => '',  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::detailedAction',));
            }

            // oro_entity_relation
            if (0 === strpos($pathinfo, '/entity/relation') && preg_match('#^/entity/relation/(?P<id>[^/]++)/(?P<entityName>[^/]++)(?:/(?P<fieldName>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_relation')), array (  'id' => 0,  'className' => '',  'fieldName' => '',  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::relationAction',));
            }

            // oro_entity_view
            if (0 === strpos($pathinfo, '/entity/view') && preg_match('#^/entity/view/(?P<entityName>[^/]++)/item/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_view')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::viewAction',));
            }

            // oro_entity_update
            if (0 === strpos($pathinfo, '/entity/update') && preg_match('#^/entity/update/(?P<entityName>[^/]++)/item(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::updateAction',));
            }

            // oro_entity_delete
            if (0 === strpos($pathinfo, '/entity/delete') && preg_match('#^/entity/delete/(?P<entityName>[^/]++)/item/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_delete')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_fields_entity
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/entities/fields(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_fields_entity;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_fields_entity')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityController::fieldsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_fields_entity:

            // oro_api_get_entities
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/entities(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_entities;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_entities')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_entities:

            // oro_api_get_entity_fields
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/entities/(?P<entityName>((\\w+)_)+(\\w+))/fields(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_entity_fields;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_entity_fields')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityFieldController::getFieldsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_entity_fields:

            // oro_api_get_entity_aliases
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/entities/aliases(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_entity_aliases;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_entity_aliases')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityAliasController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_entity_aliases:

            // oro_api_get_dictionary_values_auto_835
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/leadsources(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_dictionary_values_auto_835;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_dictionary_values_auto_835')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'dictionary' => 'leadsources',));
            }
            not_oro_api_get_dictionary_values_auto_835:

            // oro_api_get_dictionary_values_auto_836
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/magentonewslettersubscriberstatuses(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_dictionary_values_auto_836;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_dictionary_values_auto_836')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'dictionary' => 'magentonewslettersubscriberstatuses',));
            }
            not_oro_api_get_dictionary_values_auto_836:

            // oro_api_get_addresstypes_auto_837
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/Oro_Bundle_AddressBundle_Entity_AddressType(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_addresstypes_auto_837;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_addresstypes_auto_837')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\AddressTypeController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_addresstypes_auto_837:

            // oro_api_get_addresstypes
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/addresstypes(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_addresstypes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_addresstypes')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\AddressTypeController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_addresstypes:

            // oro_api_get_dictionary_values_auto_838
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/regions(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_dictionary_values_auto_838;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_dictionary_values_auto_838')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'dictionary' => 'regions',));
            }
            not_oro_api_get_dictionary_values_auto_838:

            // oro_api_get_countries_auto_839
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/Oro_Bundle_AddressBundle_Entity_Country(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_countries_auto_839;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_countries_auto_839')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\CountryController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_countries_auto_839:

            // oro_api_get_countries
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/countries(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_countries;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_countries')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\CountryController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_countries:

            // oro_api_get_dictionary_values_auto_840
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/contactsources(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_dictionary_values_auto_840;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_dictionary_values_auto_840')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'dictionary' => 'contactsources',));
            }
            not_oro_api_get_dictionary_values_auto_840:

            // oro_api_get_dictionary_values_auto_841
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/contactmethods(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_dictionary_values_auto_841;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_dictionary_values_auto_841')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'dictionary' => 'contactmethods',));
            }
            not_oro_api_get_dictionary_values_auto_841:

            // oro_api_get_dictionary_values_auto_842
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/opportunitystatuses(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_dictionary_values_auto_842;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_dictionary_values_auto_842')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'dictionary' => 'opportunitystatuses',));
            }
            not_oro_api_get_dictionary_values_auto_842:

            // oro_api_get_dictionary_values_auto_843
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/opportunityclosereasons(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_dictionary_values_auto_843;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_dictionary_values_auto_843')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'dictionary' => 'opportunityclosereasons',));
            }
            not_oro_api_get_dictionary_values_auto_843:

            // oro_api_get_dictionary_values_auto_844
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/leadstatuses(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_dictionary_values_auto_844;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_dictionary_values_auto_844')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'dictionary' => 'leadstatuses',));
            }
            not_oro_api_get_dictionary_values_auto_844:

            // oro_api_get_dictionary_values_auto_845
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/contactreasons(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_dictionary_values_auto_845;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_dictionary_values_auto_845')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'dictionary' => 'contactreasons',));
            }
            not_oro_api_get_dictionary_values_auto_845:

            // oro_api_get_dictionary_values_auto_846
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/magentocartstatuses(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_dictionary_values_auto_846;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_dictionary_values_auto_846')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'dictionary' => 'magentocartstatuses',));
            }
            not_oro_api_get_dictionary_values_auto_846:

            // oro_api_get_dictionary_values_auto_847
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/casepriorities(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_dictionary_values_auto_847;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_dictionary_values_auto_847')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'dictionary' => 'casepriorities',));
            }
            not_oro_api_get_dictionary_values_auto_847:

            // oro_api_get_dictionary_values_auto_848
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/casestatuses(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_dictionary_values_auto_848;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_dictionary_values_auto_848')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'dictionary' => 'casestatuses',));
            }
            not_oro_api_get_dictionary_values_auto_848:

            // oro_api_get_dictionary_values_auto_849
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/casesources(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_dictionary_values_auto_849;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_dictionary_values_auto_849')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'dictionary' => 'casesources',));
            }
            not_oro_api_get_dictionary_values_auto_849:

            // oro_api_get_dictionary_values
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/(?P<dictionary>leadsources|Extend_Entity_EV_Lead_Source|magentonewslettersubscriberstatuses|Extend_Entity_EV_Mage_Subscr_Status|regions|Oro_Bundle_AddressBundle_Entity_Region|contactsources|OroCRM_Bundle_ContactBundle_Entity_Source|contactmethods|OroCRM_Bundle_ContactBundle_Entity_Method|opportunitystatuses|OroCRM_Bundle_SalesBundle_Entity_OpportunityStatus|opportunityclosereasons|OroCRM_Bundle_SalesBundle_Entity_OpportunityCloseReason|leadstatuses|OroCRM_Bundle_SalesBundle_Entity_LeadStatus|contactreasons|OroCRM_Bundle_ContactUsBundle_Entity_ContactReason|magentocartstatuses|OroCRM_Bundle_MagentoBundle_Entity_CartStatus|casepriorities|OroCRM_Bundle_CaseBundle_Entity_CasePriority|casestatuses|OroCRM_Bundle_CaseBundle_Entity_CaseStatus|casesources|OroCRM_Bundle_CaseBundle_Entity_CaseSource)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_dictionary_values;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_dictionary_values')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_dictionary_values:

            // oro_api_options_dictionary_values
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/dictionary/values(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_dictionary_values;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_dictionary_values')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\DictionaryController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_dictionary_values:

        }

        if (0 === strpos($pathinfo, '/entity')) {
            if (0 === strpos($pathinfo, '/entity/config')) {
                if (0 === strpos($pathinfo, '/entity/config/audit')) {
                    // oro_entityconfig_audit
                    if (preg_match('#^/entity/config/audit(?:/(?P<entity>[a-zA-Z0-9_]+)(?:/(?P<id>\\d+)(?:/(?P<_format>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_audit')), array (  'entity' => 'entity',  'id' => 0,  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AuditController::auditAction',));
                    }

                    // oro_entityconfig_audit_field
                    if (0 === strpos($pathinfo, '/entity/config/audit_field') && preg_match('#^/entity/config/audit_field(?:/(?P<entity>[a-zA-Z0-9_]+)(?:/(?P<id>\\d+)(?:/(?P<_format>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_audit_field')), array (  'entity' => 'entity',  'id' => 0,  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AuditController::auditFieldAction',));
                    }

                }

                // oro_entityconfig_index
                if (rtrim($pathinfo, '/') === '/entity/config') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'oro_entityconfig_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::indexAction',  '_route' => 'oro_entityconfig_index',);
                }

                // oro_entityconfig_update
                if (0 === strpos($pathinfo, '/entity/config/update') && preg_match('#^/entity/config/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_update')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::updateAction',));
                }

                // oro_entityconfig_view
                if (0 === strpos($pathinfo, '/entity/config/view') && preg_match('#^/entity/config/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_view')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::viewAction',));
                }

                if (0 === strpos($pathinfo, '/entity/config/field')) {
                    // oro_entityconfig_fields
                    if (0 === strpos($pathinfo, '/entity/config/fields') && preg_match('#^/entity/config/fields(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_fields')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldsAction',));
                    }

                    // oro_entityconfig_field_update
                    if (0 === strpos($pathinfo, '/entity/config/field/update') && preg_match('#^/entity/config/field/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_field_update')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldUpdateAction',));
                    }

                    // oro_entityconfig_field_search
                    if (0 === strpos($pathinfo, '/entity/config/field/search') && preg_match('#^/entity/config/field/search(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_field_search')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldSearchAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/entity/config/widget')) {
                    // oro_entityconfig_widget_info
                    if (0 === strpos($pathinfo, '/entity/config/widget/info') && preg_match('#^/entity/config/widget/info/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_widget_info')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::infoAction',));
                    }

                    // oro_entityconfig_widget_unique_keys
                    if (0 === strpos($pathinfo, '/entity/config/widget/unique_keys') && preg_match('#^/entity/config/widget/unique_keys/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_widget_unique_keys')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::uniqueKeysAction',));
                    }

                    // oro_entityconfig_widget_entity_fields
                    if (0 === strpos($pathinfo, '/entity/config/widget/entity_fields') && preg_match('#^/entity/config/widget/entity_fields/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_widget_entity_fields')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::entityFieldsAction',));
                    }

                }

            }

            // oro_entityextend_api_rest_enum_get
            if (0 === strpos($pathinfo, '/entity_extends/enum') && preg_match('#^/entity_extends/enum/(?P<entityName>((\\w+)_)+(\\w+))$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_entityextend_api_rest_enum_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_api_rest_enum_get')), array (  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\Api\\Rest\\EnumController::getAction',));
            }
            not_oro_entityextend_api_rest_enum_get:

            if (0 === strpos($pathinfo, '/entity/extend')) {
                // oro_entityextend_update
                if (0 === strpos($pathinfo, '/entity/extend/update') && preg_match('#^/entity/extend/update(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ApplyController::updateAction',));
                }

                if (0 === strpos($pathinfo, '/entity/extend/entity')) {
                    // oro_entityextend_entity_unique_key
                    if (0 === strpos($pathinfo, '/entity/extend/entity/unique-key') && preg_match('#^/entity/extend/entity/unique\\-key(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_entity_unique_key')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::uniqueAction',));
                    }

                    // oro_entityextend_entity_create
                    if ($pathinfo === '/entity/extend/entity/create') {
                        return array (  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::createAction',  '_route' => 'oro_entityextend_entity_create',);
                    }

                    // oro_entityextend_entity_remove
                    if (0 === strpos($pathinfo, '/entity/extend/entity/remove') && preg_match('#^/entity/extend/entity/remove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_entity_remove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::removeAction',));
                    }

                    // oro_entityextend_entity_unremove
                    if (0 === strpos($pathinfo, '/entity/extend/entity/unremove') && preg_match('#^/entity/extend/entity/unremove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_entity_unremove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::unremoveAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/entity/extend/field')) {
                    // oro_entityextend_field_create
                    if (0 === strpos($pathinfo, '/entity/extend/field/create') && preg_match('#^/entity/extend/field/create(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_create')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::createAction',));
                    }

                    // oro_entityextend_field_update
                    if (0 === strpos($pathinfo, '/entity/extend/field/update') && preg_match('#^/entity/extend/field/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::updateAction',));
                    }

                    // oro_entityextend_field_remove
                    if (0 === strpos($pathinfo, '/entity/extend/field/remove') && preg_match('#^/entity/extend/field/remove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_remove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::removeAction',));
                    }

                    // oro_entityextend_field_unremove
                    if (0 === strpos($pathinfo, '/entity/extend/field/unremove') && preg_match('#^/entity/extend/field/unremove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_unremove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::unremoveAction',));
                    }

                }

            }

        }

        // oro_api_get_entity_extend_enum
        if (0 === strpos($pathinfo, '/api/rest') && preg_match('#^/api/rest/(?P<version>latest|v1)/entity_extends/enum/(?P<entityName>((\\w+)_)+(\\w+))(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_oro_api_get_entity_extend_enum;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_entity_extend_enum')), array (  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\Api\\Rest\\EnumController::getAction',  '_format' => 'json',  'version' => 'latest',));
        }
        not_oro_api_get_entity_extend_enum:

        if (0 === strpos($pathinfo, '/integration')) {
            // oro_integration_index
            if (rtrim($pathinfo, '/') === '/integration') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oro_integration_index');
                }

                return array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::indexAction',  '_route' => 'oro_integration_index',);
            }

            // oro_integration_create
            if ($pathinfo === '/integration/create') {
                return array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::createAction',  '_route' => 'oro_integration_create',);
            }

            // oro_integration_update
            if (0 === strpos($pathinfo, '/integration/update') && preg_match('#^/integration/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_integration_update')), array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::updateAction',));
            }

            // oro_integration_schedule
            if (0 === strpos($pathinfo, '/integration/schedule') && preg_match('#^/integration/schedule/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_integration_schedule')), array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::scheduleAction',));
            }

            // oro_integration_toggle
            if (0 === strpos($pathinfo, '/integration/toggle') && preg_match('#^/integration/toggle/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_integration_toggle')), array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\IntegrationController::toggleAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // oro_api_delete_integration
            if (0 === strpos($pathinfo, '/api/rest') && preg_match('#^/api/rest/(?P<version>latest|v1)/integrations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_integration;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_integration')), array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\Api\\Rest\\IntegrationController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_integration:

            // oro_activity_view_activities
            if (0 === strpos($pathinfo, '/activities/view') && preg_match('#^/activities/view/(?P<entity>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_activity_view_activities')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\ActivityController::activitiesAction',));
            }

            if (0 === strpos($pathinfo, '/api/rest')) {
                // oro_api_get_activity_types
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_types;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_types')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTypesAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activity_types:

                // oro_api_get_activity_target_types_auto_850
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/emails(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_target_types_auto_850;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_types_auto_850')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTargetTypesAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'emails',));
                }
                not_oro_api_get_activity_target_types_auto_850:

                // oro_api_get_activity_target_types_auto_851
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/calendarevents(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_target_types_auto_851;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_types_auto_851')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTargetTypesAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calendarevents',));
                }
                not_oro_api_get_activity_target_types_auto_851:

                // oro_api_get_activity_target_types_auto_852
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/calls(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_target_types_auto_852;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_types_auto_852')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTargetTypesAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calls',));
                }
                not_oro_api_get_activity_target_types_auto_852:

                // oro_api_get_activity_target_types_auto_853
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/tasks(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_target_types_auto_853;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_types_auto_853')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTargetTypesAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'tasks',));
                }
                not_oro_api_get_activity_target_types_auto_853:

                // oro_api_get_activity_target_types
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/(?P<activity>emails|calendarevents|calls|tasks)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_target_types;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_types')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::getTargetTypesAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activity_target_types:

                // oro_api_options_activities
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activities;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activities')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activities:

                // oro_api_options_activities_auto_854
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activity(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activities_auto_854;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activities_auto_854')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activities_auto_854:

                // oro_api_get_activity_relations_auto_855
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/emails/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_relations_auto_855;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_relations_auto_855')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'emails',));
                }
                not_oro_api_get_activity_relations_auto_855:

                // oro_api_get_activity_relations_auto_856
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/calendarevents/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_relations_auto_856;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_relations_auto_856')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calendarevents',));
                }
                not_oro_api_get_activity_relations_auto_856:

                // oro_api_get_activity_relations_auto_857
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/calls/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_relations_auto_857;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_relations_auto_857')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calls',));
                }
                not_oro_api_get_activity_relations_auto_857:

                // oro_api_get_activity_relations_auto_858
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/tasks/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_relations_auto_858;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_relations_auto_858')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'tasks',));
                }
                not_oro_api_get_activity_relations_auto_858:

                // oro_api_get_activity_relations
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/(?P<activity>emails|calendarevents|calls|tasks)/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_relations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_relations')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activity_relations:

                // oro_api_post_activity_relation_auto_859
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/emails/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_activity_relation_auto_859;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_activity_relation_auto_859')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::postAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'emails',));
                }
                not_oro_api_post_activity_relation_auto_859:

                // oro_api_post_activity_relation_auto_860
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/calendarevents/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_activity_relation_auto_860;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_activity_relation_auto_860')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::postAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calendarevents',));
                }
                not_oro_api_post_activity_relation_auto_860:

                // oro_api_post_activity_relation_auto_861
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/calls/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_activity_relation_auto_861;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_activity_relation_auto_861')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::postAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calls',));
                }
                not_oro_api_post_activity_relation_auto_861:

                // oro_api_post_activity_relation_auto_862
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/tasks/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_activity_relation_auto_862;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_activity_relation_auto_862')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::postAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'tasks',));
                }
                not_oro_api_post_activity_relation_auto_862:

                // oro_api_post_activity_relation
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/(?P<activity>emails|calendarevents|calls|tasks)/(?P<id>\\d+)/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_activity_relation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_activity_relation')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_activity_relation:

                // oro_api_delete_activity_relation_auto_863
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/emails/(?P<id>\\d+)/(?P<entity>\\w+)/(?P<entityId>[^/]+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_activity_relation_auto_863;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_activity_relation_auto_863')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::deleteAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'emails',));
                }
                not_oro_api_delete_activity_relation_auto_863:

                // oro_api_delete_activity_relation_auto_864
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/calendarevents/(?P<id>\\d+)/(?P<entity>\\w+)/(?P<entityId>[^/]+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_activity_relation_auto_864;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_activity_relation_auto_864')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::deleteAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calendarevents',));
                }
                not_oro_api_delete_activity_relation_auto_864:

                // oro_api_delete_activity_relation_auto_865
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/calls/(?P<id>\\d+)/(?P<entity>\\w+)/(?P<entityId>[^/]+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_activity_relation_auto_865;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_activity_relation_auto_865')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::deleteAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calls',));
                }
                not_oro_api_delete_activity_relation_auto_865:

                // oro_api_delete_activity_relation_auto_866
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/tasks/(?P<id>\\d+)/(?P<entity>\\w+)/(?P<entityId>[^/]+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_activity_relation_auto_866;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_activity_relation_auto_866')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::deleteAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'tasks',));
                }
                not_oro_api_delete_activity_relation_auto_866:

                // oro_api_delete_activity_relation
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/(?P<activity>emails|calendarevents|calls|tasks)/(?P<id>\\d+)/(?P<entity>\\w+)/(?P<entityId>[^/]+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_activity_relation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_activity_relation')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_activity_relation:

                // oro_api_options_activity_relations
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activity/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activity_relations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_relations')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityEntityController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activity_relations:

                // oro_api_get_email_search_relations
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/emails/relations/search(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_email_search_relations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_email_search_relations')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailActivitySearchController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_email_search_relations:

                // oro_api_get_activity_search_relations_auto_867
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/calendarevents/relations/search(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_search_relations_auto_867;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_search_relations_auto_867')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivitySearchController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calendarevents',));
                }
                not_oro_api_get_activity_search_relations_auto_867:

                // oro_api_get_activity_search_relations_auto_868
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/calls/relations/search(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_search_relations_auto_868;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_search_relations_auto_868')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivitySearchController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'calls',));
                }
                not_oro_api_get_activity_search_relations_auto_868:

                // oro_api_get_activity_search_relations_auto_869
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/tasks/relations/search(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_search_relations_auto_869;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_search_relations_auto_869')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivitySearchController::cgetAction',  '_format' => 'json',  'version' => 'latest',  'activity' => 'tasks',));
                }
                not_oro_api_get_activity_search_relations_auto_869:

                // oro_api_get_activity_search_relations
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/(?P<activity>calendarevents|calls|tasks)/relations/search(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_search_relations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_search_relations')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivitySearchController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activity_search_relations:

                // oro_api_options_activity_search_relations
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activity/search/relations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activity_search_relations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_search_relations')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivitySearchController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activity_search_relations:

                // oro_api_get_activity_target_all_types
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/targets(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_target_all_types;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_all_types')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::getAllTypesAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activity_target_all_types:

                // oro_api_get_activity_target_activity_types
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/targets/(?P<entity>\\w+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_target_activity_types;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_activity_types')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::getActivityTypesAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activity_target_activity_types:

                // oro_api_get_activity_target_activities
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activities/targets/(?P<entity>\\w+)/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activity_target_activities;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activity_target_activities')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::getActivitiesAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activity_target_activities:

                // oro_api_options_activity_targets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activity/targets(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activity_targets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_targets')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activity_targets:

                // oro_api_options_activity_targets_auto_870
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activity/target(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activity_targets_auto_870;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activity_targets_auto_870')), array (  '_controller' => 'Oro\\Bundle\\ActivityBundle\\Controller\\Api\\Rest\\ActivityTargetController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activity_targets_auto_870:

            }

            if (0 === strpos($pathinfo, '/activity-list')) {
                // oro_activity_list_widget_activities
                if (0 === strpos($pathinfo, '/activity-list/view/widget') && preg_match('#^/activity\\-list/view/widget/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_activity_list_widget_activities')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\ActivityListController::widgetAction',));
                }

                // oro_activitylist_segment_activitycondition
                if ($pathinfo === '/activity-list/segment/activity-condition') {
                    return array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\SegmentController::activityConditionAction',  '_route' => 'oro_activitylist_segment_activitycondition',);
                }

            }

            if (0 === strpos($pathinfo, '/api/rest')) {
                // oro_api_get_activitylists
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activitylists/(?P<entityClass>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activitylists;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activitylists')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activitylists:

                // oro_api_get_activitylist_activity_list_item
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activitylists/(?P<entityId>[^/]++)/activity/list/item(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activitylist_activity_list_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activitylist_activity_list_item')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::getActivityListItemAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activitylist_activity_list_item:

                // oro_api_get_activitylist_activity_list_option
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activitylist/activity/list/option(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_activitylist_activity_list_option;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_activitylist_activity_list_option')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::getActivityListOptionAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_activitylist_activity_list_option:

                // oro_api_options_activitylists
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activitylists(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activitylists;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activitylists')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activitylists:

                // oro_api_options_activitylists_auto_871
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/activitylist(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_activitylists_auto_871;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_activitylists_auto_871')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_activitylists_auto_871:

                // oro_activity_list_api_get_list
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/activitylist/(?P<entityClass>[^/]++)/(?P<entityId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_activity_list_api_get_list;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_activity_list_api_get_list')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_activity_list_api_get_list:

                // oro_activity_list_api_get_item
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/activitylist/(?P<entityId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_activity_list_api_get_item;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_activity_list_api_get_item')), array (  '_controller' => 'Oro\\Bundle\\ActivityListBundle\\Controller\\Api\\Rest\\ActivityListController::getActivityListItemAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_activity_list_api_get_item:

                // oro_api_get_addresstype
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/addresstypes/(?P<name>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_addresstype;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_addresstype')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\AddressTypeController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_addresstype:

                // oro_api_get_country
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/countries/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_country;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_country')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\CountryController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_country:

                // oro_api_get_region
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/region(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_region;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_region')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\RegionController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_region:

                // oro_api_country_get_regions
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/country/regions/(?P<country>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_country_get_regions;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_country_get_regions')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\CountryRegionsController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_country_get_regions:

            }

        }

        if (0 === strpos($pathinfo, '/calendar')) {
            if (0 === strpos($pathinfo, '/calendar/event/ajax')) {
                // oro_calendar_event_accepted
                if (0 === strpos($pathinfo, '/calendar/event/ajax/accept') && preg_match('#^/calendar/event/ajax/accept/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_accepted')), array (  'status' => 'accepted',  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\AjaxCalendarEventController::changeStatus',));
                }

                // oro_calendar_event_tentatively_accepted
                if (0 === strpos($pathinfo, '/calendar/event/ajax/tentatively') && preg_match('#^/calendar/event/ajax/tentatively/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_tentatively_accepted')), array (  'status' => 'tentatively_accepted',  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\AjaxCalendarEventController::changeStatus',));
                }

                // oro_calendar_event_declined
                if (0 === strpos($pathinfo, '/calendar/event/ajax/decline') && preg_match('#^/calendar/event/ajax/decline/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_declined')), array (  'status' => 'declined',  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\AjaxCalendarEventController::changeStatus',));
                }

            }

            if (0 === strpos($pathinfo, '/calendar/calendar')) {
                // oro_calendar_api_rest_calendarconnection_cget
                if (0 === strpos($pathinfo, '/calendar/calendars') && preg_match('#^/calendar/calendars/(?P<id>\\d+)/connections$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_calendar_api_rest_calendarconnection_cget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_api_rest_calendarconnection_cget')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::cgetAction',));
                }
                not_oro_calendar_api_rest_calendarconnection_cget:

                if (0 === strpos($pathinfo, '/calendar/calendarconnections')) {
                    // oro_calendar_api_rest_calendarconnection_put
                    if (preg_match('#^/calendar/calendarconnections/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_oro_calendar_api_rest_calendarconnection_put;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_api_rest_calendarconnection_put')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::putAction',));
                    }
                    not_oro_calendar_api_rest_calendarconnection_put:

                    // oro_calendar_api_rest_calendarconnection_post
                    if ($pathinfo === '/calendar/calendarconnections') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_oro_calendar_api_rest_calendarconnection_post;
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::postAction',  '_route' => 'oro_calendar_api_rest_calendarconnection_post',);
                    }
                    not_oro_calendar_api_rest_calendarconnection_post:

                    // oro_calendar_api_rest_calendarconnection_delete
                    if (preg_match('#^/calendar/calendarconnections/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_oro_calendar_api_rest_calendarconnection_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_api_rest_calendarconnection_delete')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::deleteAction',));
                    }
                    not_oro_calendar_api_rest_calendarconnection_delete:

                }

                if (0 === strpos($pathinfo, '/calendar/calendars')) {
                    // oro_calendar_api_rest_calendar_getdefault
                    if ($pathinfo === '/calendar/calendars/default') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_calendar_api_rest_calendar_getdefault;
                        }

                        return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarController::getDefaultAction',  '_route' => 'oro_calendar_api_rest_calendar_getdefault',);
                    }
                    not_oro_calendar_api_rest_calendar_getdefault:

                    // oro_calendar_api_rest_calendarevent_getbycalendar
                    if (preg_match('#^/calendar/calendars/(?P<id>\\d+)/events/(?P<eventId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_calendar_api_rest_calendarevent_getbycalendar;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_api_rest_calendarevent_getbycalendar')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::getByCalendarAction',));
                    }
                    not_oro_calendar_api_rest_calendarevent_getbycalendar:

                }

                // oro_calendar_api_rest_calendarevent_post
                if ($pathinfo === '/calendar/calendarevents') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_calendar_api_rest_calendarevent_post;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::postAction',  '_route' => 'oro_calendar_api_rest_calendarevent_post',);
                }
                not_oro_calendar_api_rest_calendarevent_post:

            }

            // oro_calendar_view_default
            if ($pathinfo === '/calendar/default') {
                return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarController::viewDefaultAction',  '_route' => 'oro_calendar_view_default',);
            }

            // oro_calendar_view
            if (0 === strpos($pathinfo, '/calendar/view') && preg_match('#^/calendar/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_view')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarController::viewAction',));
            }

            if (0 === strpos($pathinfo, '/calendar/event')) {
                // oro_calendar_event_index
                if ($pathinfo === '/calendar/event') {
                    return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::indexAction',  '_route' => 'oro_calendar_event_index',);
                }

                // oro_calendar_event_view
                if (0 === strpos($pathinfo, '/calendar/event/view') && preg_match('#^/calendar/event/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_view')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::viewAction',));
                }

                // oro_calendar_event_widget_info
                if (0 === strpos($pathinfo, '/calendar/event/widget/info') && preg_match('#^/calendar/event/widget/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_widget_info')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::infoAction',));
                }

                // oro_calendar_event_activity_view
                if (0 === strpos($pathinfo, '/calendar/event/activity/view') && preg_match('#^/calendar/event/activity/view/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_activity_view')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::activityAction',));
                }

                // oro_calendar_event_create
                if ($pathinfo === '/calendar/event/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::createAction',  '_route' => 'oro_calendar_event_create',);
                }

                // oro_calendar_event_update
                if (0 === strpos($pathinfo, '/calendar/event/update') && preg_match('#^/calendar/event/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_event_update')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarEventController::updateAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/system-calendar')) {
            // oro_system_calendar_index
            if (rtrim($pathinfo, '/') === '/system-calendar') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oro_system_calendar_index');
                }

                return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::indexAction',  '_route' => 'oro_system_calendar_index',);
            }

            // oro_system_calendar_view
            if (0 === strpos($pathinfo, '/system-calendar/view') && preg_match('#^/system\\-calendar/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_view')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::viewAction',));
            }

            // oro_system_calendar_create
            if ($pathinfo === '/system-calendar/create') {
                return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::createAction',  '_route' => 'oro_system_calendar_create',);
            }

            // oro_system_calendar_update
            if (0 === strpos($pathinfo, '/system-calendar/update') && preg_match('#^/system\\-calendar/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_update')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::updateAction',));
            }

            // oro_system_calendar_widget_events
            if (0 === strpos($pathinfo, '/system-calendar/widget/events') && preg_match('#^/system\\-calendar/widget/events/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_widget_events')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarController::eventsAction',));
            }

            // oro_system_calendar_event_view
            if (0 === strpos($pathinfo, '/system-calendar/event/view') && preg_match('#^/system\\-calendar/event/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_event_view')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarEventController::viewAction',));
            }

            // oro_system_calendar_event_create
            if (preg_match('#^/system\\-calendar/(?P<id>\\d+)/event/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_event_create')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarEventController::createAction',));
            }

            // oro_system_calendar_event_update
            if (0 === strpos($pathinfo, '/system-calendar/event/update') && preg_match('#^/system\\-calendar/event/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_system_calendar_event_update')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\SystemCalendarEventController::updateAction',));
            }

        }

        // oro_calendar_dashboard_my_calendar
        if (0 === strpos($pathinfo, '/dashboard/my_calendar') && preg_match('#^/dashboard/my_calendar/(?P<widget>[\\w-]+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_dashboard_my_calendar')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Dashboard\\DashboardController::myCalendarAction',));
        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_calendar_connections
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendars/(?P<id>\\d+)/connections(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_calendar_connections;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calendar_connections')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_calendar_connections:

            // oro_api_put_calendar_connection
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarconnections/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_calendar_connection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_calendar_connection')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_calendar_connection:

            // oro_api_post_calendar_connection
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarconnections(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_calendar_connection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_calendar_connection')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_calendar_connection:

            // oro_api_delete_calendar_connection
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarconnections/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_calendar_connection;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_calendar_connection')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_calendar_connection:

            // oro_api_options_calendar_connections
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendar/connections(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_calendar_connections;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_calendar_connections')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_calendar_connections:

            // oro_api_options_calendar_connections_auto_872
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendar/connection(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_calendar_connections_auto_872;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_calendar_connections_auto_872')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_calendar_connections_auto_872:

            // oro_api_get_calendarevents
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevents(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_calendarevents;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calendarevents')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_calendarevents:

            // oro_api_get_calendarevent
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevents/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_calendarevent;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calendarevent')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_calendarevent:

            // oro_api_get_calendarevent_by_calendar
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendars/(?P<id>\\d+)/events/(?P<eventId>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_calendarevent_by_calendar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calendarevent_by_calendar')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::getByCalendarAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_calendarevent_by_calendar:

            // oro_api_put_calendarevent
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevents/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_calendarevent;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_calendarevent')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_calendarevent:

            // oro_api_post_calendarevent
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevents(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_calendarevent;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_calendarevent')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_calendarevent:

            // oro_api_delete_calendarevent
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevents/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_calendarevent;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_calendarevent')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_calendarevent:

            // oro_api_options_calendarevents
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevents(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_calendarevents;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_calendarevents')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_calendarevents:

            // oro_api_options_calendarevents_auto_873
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevent(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_calendarevents_auto_873;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_calendarevents_auto_873')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_calendarevents_auto_873:

            // oro_api_get_calendar_default
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendars/default(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_calendar_default;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calendar_default')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarController::getDefaultAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_calendar_default:

            // oro_api_delete_systemcalendar
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/systemcalendars/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_systemcalendar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_systemcalendar')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\SystemCalendarController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_systemcalendar:

            // oro_api_options_systemcalendars
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/systemcalendars(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_systemcalendars;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_systemcalendars')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\SystemCalendarController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_systemcalendars:

            // oro_api_options_systemcalendars_auto_874
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/systemcalendar(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_systemcalendars_auto_874;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_systemcalendars_auto_874')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\SystemCalendarController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_systemcalendars_auto_874:

        }

        if (0 === strpos($pathinfo, '/config')) {
            if (0 === strpos($pathinfo, '/config/configuration')) {
                // oro_config_api_rest_configuration_cget
                if ($pathinfo === '/config/configuration') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_config_api_rest_configuration_cget;
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\Api\\Rest\\ConfigurationController::cgetAction',  '_route' => 'oro_config_api_rest_configuration_cget',);
                }
                not_oro_config_api_rest_configuration_cget:

                // oro_config_api_rest_configuration_get
                if (preg_match('#^/config/configuration/(?P<path>[\\w-]+[\\w-\\/]*)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_config_api_rest_configuration_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_config_api_rest_configuration_get')), array (  '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\Api\\Rest\\ConfigurationController::getAction',));
                }
                not_oro_config_api_rest_configuration_get:

            }

            // oro_config_configuration_system
            if (0 === strpos($pathinfo, '/config/system') && preg_match('#^/config/system(?:/(?P<activeGroup>[^/]++)(?:/(?P<activeSubGroup>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_config_configuration_system')), array (  'activeGroup' => NULL,  'activeSubGroup' => NULL,  '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\ConfigurationController::systemAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_configurations
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/configuration(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_configurations;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_configurations')), array (  '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\Api\\Rest\\ConfigurationController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_configurations:

            // oro_api_get_configuration
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/configuration/(?P<path>[\\w-]+[\\w-\\/]*)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_configuration;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_configuration')), array (  '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\Api\\Rest\\ConfigurationController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_configuration:

        }

        if (0 === strpos($pathinfo, '/cron/job')) {
            // oro_cron_job_index
            if (rtrim($pathinfo, '/') === '/cron/job') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oro_cron_job_index');
                }

                return array (  '_controller' => 'Oro\\Bundle\\CronBundle\\Controller\\JobController::indexAction',  '_route' => 'oro_cron_job_index',);
            }

            // oro_cron_job_view
            if (0 === strpos($pathinfo, '/cron/job/view') && preg_match('#^/cron/job/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_cron_job_view')), array (  '_controller' => 'Oro\\Bundle\\CronBundle\\Controller\\JobController::viewAction',));
            }

            // oro_cron_job_run_daemon
            if ($pathinfo === '/cron/job/run-daemon') {
                return array (  '_controller' => 'Oro\\Bundle\\CronBundle\\Controller\\JobController::runDaemonAction',  '_route' => 'oro_cron_job_run_daemon',);
            }

            if (0 === strpos($pathinfo, '/cron/job/st')) {
                // oro_cron_job_stop_daemon
                if ($pathinfo === '/cron/job/stop-daemon') {
                    return array (  '_controller' => 'Oro\\Bundle\\CronBundle\\Controller\\JobController::stopDaemonAction',  '_route' => 'oro_cron_job_stop_daemon',);
                }

                // oro_cron_job_status
                if ($pathinfo === '/cron/job/status') {
                    return array (  '_controller' => 'Oro\\Bundle\\CronBundle\\Controller\\JobController::statusAction',  '_route' => 'oro_cron_job_status',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/audit')) {
                // oro_dataaudit_index
                if (preg_match('#^/audit(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dataaudit_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\AuditController::indexAction',));
                }

                // oro_dataaudit_history
                if (0 === strpos($pathinfo, '/audit/history') && preg_match('#^/audit/history(?:/(?P<entity>[a-zA-Z0-9_]+)(?:/(?P<id>\\d+)(?:/(?P<_format>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dataaudit_history')), array (  'entity' => 'entity',  'id' => 0,  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\AuditController::historyAction',));
                }

            }

            if (0 === strpos($pathinfo, '/api/rest')) {
                // oro_api_get_audits
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/audits(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_audits;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_audits')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_audits:

                // oro_api_get_audit
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/audits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_audit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_audit')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_audit:

                // oro_api_get_audit_fields
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/audit/fields(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_audit_fields;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_audit_fields')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::getFieldsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_audit_fields:

                // oro_api_options_audits
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/audits(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_audits;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_audits')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_audits:

                // oro_api_options_audits_auto_875
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/audit(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_audits_auto_875;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_audits_auto_875')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_audits_auto_875:

            }

        }

        if (0 === strpos($pathinfo, '/datagrid')) {
            // oro_datagrid_widget
            if (0 === strpos($pathinfo, '/datagrid/widget') && preg_match('#^/datagrid/widget/(?P<gridName>[\\w\\:-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_widget')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::widgetAction',));
            }

            // oro_datagrid_index
            if (preg_match('#^/datagrid/(?P<gridName>[\\w\\:-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_index')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::getAction',));
            }

            // oro_datagrid_export_action
            if (preg_match('#^/datagrid/(?P<gridName>[\\w\\:-]+)/export/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oro_datagrid_export_action');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_export_action')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::exportAction',));
            }

            // oro_datagrid_mass_action
            if (preg_match('#^/datagrid/(?P<gridName>[\\w\\:-]+)/massAction/(?P<actionName>[\\w-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_mass_action')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::massActionAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_datagrid_api_rest_gridview_post
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/gridviews(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_datagrid_api_rest_gridview_post;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_api_rest_gridview_post')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_datagrid_api_rest_gridview_post:

            // oro_datagrid_api_rest_gridview_put
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/gridviews/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_datagrid_api_rest_gridview_put;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_api_rest_gridview_put')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_datagrid_api_rest_gridview_put:

            // oro_datagrid_api_rest_gridview_delete
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/gridviews/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_datagrid_api_rest_gridview_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_api_rest_gridview_delete')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_datagrid_api_rest_gridview_delete:

            // oro_datagrid_api_rest_gridview_options
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_datagrid_api_rest_gridview_options;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_api_rest_gridview_options')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\Api\\Rest\\GridViewController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_datagrid_api_rest_gridview_options:

        }

        if (0 === strpos($pathinfo, '/embedded-form')) {
            if (0 === strpos($pathinfo, '/embedded-form/su')) {
                // oro_embedded_form_submit
                if (0 === strpos($pathinfo, '/embedded-form/submit') && preg_match('#^/embedded\\-form/submit/(?P<id>[-\\d\\w]+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_submit')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbedFormController::formAction',));
                }

                // oro_embedded_form_success
                if (0 === strpos($pathinfo, '/embedded-form/success') && preg_match('#^/embedded\\-form/success/(?P<id>[-\\d\\w]+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_success')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbedFormController::formSuccessAction',));
                }

            }

            // oro_embedded_form_list
            if (rtrim($pathinfo, '/') === '/embedded-form') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oro_embedded_form_list');
                }

                return array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::indexAction',  '_route' => 'oro_embedded_form_list',);
            }

            // oro_embedded_form_create
            if ($pathinfo === '/embedded-form/create') {
                return array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::createAction',  '_route' => 'oro_embedded_form_create',);
            }

            if (0 === strpos($pathinfo, '/embedded-form/de')) {
                // oro_embedded_form_delete
                if (0 === strpos($pathinfo, '/embedded-form/delete') && preg_match('#^/embedded\\-form/delete/(?P<id>[-\\d\\w]+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_delete')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::deleteAction',));
                }

                // oro_embedded_form_default_data
                if (0 === strpos($pathinfo, '/embedded-form/default-data') && preg_match('#^/embedded\\-form/default\\-data/(?P<formType>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_default_data')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::defaultDataAction',));
                }

            }

            // oro_embedded_form_update
            if (0 === strpos($pathinfo, '/embedded-form/update') && preg_match('#^/embedded\\-form/update/(?P<id>[-\\d\\w]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_update')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::updateAction',));
            }

            // oro_embedded_form_view
            if (0 === strpos($pathinfo, '/embedded-form/view') && preg_match('#^/embedded\\-form/view/(?P<id>[-\\d\\w]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_view')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::viewAction',));
            }

            // oro_embedded_form_info
            if (0 === strpos($pathinfo, '/embedded-form/info') && preg_match('#^/embedded\\-form/info/(?P<id>[-\\d\\w]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_embedded_form_info')), array (  '_controller' => 'Oro\\Bundle\\EmbeddedFormBundle\\Controller\\EmbeddedFormController::infoAction',));
            }

        }

        if (0 === strpos($pathinfo, '/merge')) {
            // oro_entity_merge_massaction
            if (preg_match('#^/merge/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_merge_massaction')), array (  '_controller' => 'Oro\\Bundle\\EntityMergeBundle\\Controller\\MergeController::mergeMassActionAction',));
            }

            // oro_entity_merge
            if ($pathinfo === '/merge') {
                return array (  'entityData' => NULL,  '_controller' => 'Oro\\Bundle\\EntityMergeBundle\\Controller\\MergeController::mergeAction',  '_route' => 'oro_entity_merge',);
            }

        }

        if (0 === strpos($pathinfo, '/entity-pagination')) {
            // oro_entity_pagination_first
            if (0 === strpos($pathinfo, '/entity-pagination/first') && preg_match('#^/entity\\-pagination/first/(?P<_entityName>[^/]++)/(?P<_scope>[^/]++)/(?P<_routeName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_pagination_first')), array (  '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::firstAction',));
            }

            // oro_entity_pagination_previous
            if (0 === strpos($pathinfo, '/entity-pagination/previous') && preg_match('#^/entity\\-pagination/previous/(?P<_entityName>[^/]++)/(?P<_scope>[^/]++)/(?P<_routeName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_pagination_previous')), array (  '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::previousAction',));
            }

            // oro_entity_pagination_next
            if (0 === strpos($pathinfo, '/entity-pagination/next') && preg_match('#^/entity\\-pagination/next/(?P<_entityName>[^/]++)/(?P<_scope>[^/]++)/(?P<_routeName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_pagination_next')), array (  '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::nextAction',));
            }

            // oro_entity_pagination_last
            if (0 === strpos($pathinfo, '/entity-pagination/last') && preg_match('#^/entity\\-pagination/last/(?P<_entityName>[^/]++)/(?P<_scope>[^/]++)/(?P<_routeName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_pagination_last')), array (  '_controller' => 'Oro\\Bundle\\EntityPaginationBundle\\Controller\\EntityPaginationController::lastAction',));
            }

        }

        // oro_form_autocomplete_search
        if ($pathinfo === '/autocomplete/search') {
            return array (  '_controller' => 'Oro\\Bundle\\FormBundle\\Controller\\AutocompleteController::searchAction',  '_route' => 'oro_form_autocomplete_search',);
        }

        // oro_imap_connection_check
        if ($pathinfo === '/connection/check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_oro_imap_connection_check;
            }

            return array (  '_controller' => 'Oro\\Bundle\\ImapBundle\\Controller\\ConnectionController::checkAction',  '_route' => 'oro_imap_connection_check',);
        }
        not_oro_imap_connection_check:

        if (0 === strpos($pathinfo, '/import')) {
            // oro_importexport_import_form
            if ($pathinfo === '/import') {
                return array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importFormAction',  '_route' => 'oro_importexport_import_form',);
            }

            // oro_importexport_import_validate
            if (0 === strpos($pathinfo, '/import/validate') && preg_match('#^/import/validate/(?P<processorAlias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_import_validate')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importValidateAction',));
            }

            // oro_importexport_import_process
            if (0 === strpos($pathinfo, '/import/process') && preg_match('#^/import/process/(?P<processorAlias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_import_process')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importProcessAction',));
            }

        }

        if (0 === strpos($pathinfo, '/export')) {
            // oro_importexport_export_instant
            if (0 === strpos($pathinfo, '/export/instant') && preg_match('#^/export/instant/(?P<processorAlias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_export_instant')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::instantExportAction',));
            }

            // oro_importexport_export_template
            if (0 === strpos($pathinfo, '/export/template') && preg_match('#^/export/template/(?P<processorAlias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_export_template')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::templateExportAction',));
            }

            // oro_importexport_export_download
            if (0 === strpos($pathinfo, '/export/download') && preg_match('#^/export/download/(?P<fileName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_export_download')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::downloadExportResultAction',));
            }

        }

        if (0 === strpos($pathinfo, '/i')) {
            // oro_importexport_error_log
            if (0 === strpos($pathinfo, '/import_export/error') && preg_match('#^/import_export/error/(?P<jobCode>[^/\\.]++)\\.log$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_error_log')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::errorLogAction',));
            }

            if (0 === strpos($pathinfo, '/installer')) {
                // oro_installer_flow
                if ($pathinfo === '/installer') {
                    return array (  '_controller' => 'sylius.controller.process:startAction',  'scenarioAlias' => 'oro_installer',  '_route' => 'oro_installer_flow',);
                }

                if (0 === strpos($pathinfo, '/installer/flow')) {
                    // sylius_flow_start
                    if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_start')), array (  '_controller' => 'sylius.controller.process:startAction',));
                    }

                    // sylius_flow_display
                    if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)/(?P<stepName>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_display')), array (  '_controller' => 'sylius.controller.process:displayAction',));
                    }

                    // sylius_flow_forward
                    if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)/(?P<stepName>[^/]++)/forward$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_forward')), array (  '_controller' => 'sylius.controller.process:forwardAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/notes')) {
            if (0 === strpos($pathinfo, '/notes/view')) {
                // oro_note_widget_notes
                if (0 === strpos($pathinfo, '/notes/view/widget') && preg_match('#^/notes/view/widget/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_note_widget_notes')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::widgetAction',));
                }

                // oro_note_notes
                if (preg_match('#^/notes/view/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_note_notes')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::getAction',));
                }

            }

            // oro_note_widget_info
            if (0 === strpos($pathinfo, '/notes/widget/info') && preg_match('#^/notes/widget/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_note_widget_info')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::infoAction',));
            }

            // oro_note_create
            if (0 === strpos($pathinfo, '/notes/create') && preg_match('#^/notes/create/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_note_create')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::createAction',));
            }

            // oro_note_update
            if (0 === strpos($pathinfo, '/notes/update') && preg_match('#^/notes/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_note_update')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\NoteController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_put_note
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/notes/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_note;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_note')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_note:

            // oro_api_delete_note
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/notes/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_note;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_note')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_note:

            // oro_api_options_notes
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/notes(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_notes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_notes')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_notes:

            // oro_api_options_notes_auto_876
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/note(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_notes_auto_876;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_notes_auto_876')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_notes_auto_876:

            // oro_api_get_notes
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/notes/(?P<entityClass>[^/]++)/(?P<entityId>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_notes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_notes')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::cgetAction',  '_format' => 'json',));
            }
            not_oro_api_get_notes:

            // oro_api_get_note
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/notes/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_note;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_note')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::getAction',  '_format' => 'json',));
            }
            not_oro_api_get_note:

            // oro_api_post_note
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/notes(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_note;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_note')), array (  '_controller' => 'Oro\\Bundle\\NoteBundle\\Controller\\Api\\Rest\\NoteController::postAction',  '_format' => 'json',));
            }
            not_oro_api_post_note:

        }

        if (0 === strpos($pathinfo, '/notification/email')) {
            // oro_notification_emailnotification_index
            if (preg_match('#^/notification/email(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_notification_emailnotification_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\EmailNotificationController::indexAction',));
            }

            // oro_notification_emailnotification_update
            if (0 === strpos($pathinfo, '/notification/email/update') && preg_match('#^/notification/email/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_notification_emailnotification_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\EmailNotificationController::updateAction',));
            }

            // oro_notification_emailnotification_create
            if ($pathinfo === '/notification/email/create') {
                return array (  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\EmailNotificationController::createAction',  '_route' => 'oro_notification_emailnotification_create',);
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_delete_emailnotication
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailnotications/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_emailnotication;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_emailnotication')), array (  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\Api\\Rest\\EmailNotificationController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_emailnotication:

            // oro_api_options_emailnotications
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailnotications(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_emailnotications;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailnotications')), array (  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\Api\\Rest\\EmailNotificationController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_emailnotications:

        }

        // oro_platform_system_info
        if ($pathinfo === '/platform/information') {
            return array (  '_controller' => 'Oro\\Bundle\\PlatformBundle\\Controller\\PlatformController::systemInfoAction',  '_route' => 'oro_platform_system_info',);
        }

        // oro_api_querydesigner_fields_entity
        if (0 === strpos($pathinfo, '/api/rest') && preg_match('#^/api/rest/(?P<version>latest|v1)/querydesigner/entities/fields(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_oro_api_querydesigner_fields_entity;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_querydesigner_fields_entity')), array (  '_controller' => 'Oro\\Bundle\\QueryDesignerBundle\\Controller\\Api\\Rest\\QueryDesignerEntityController::fieldsAction',  '_format' => 'json',  'version' => 'latest',));
        }
        not_oro_api_querydesigner_fields_entity:

        if (0 === strpos($pathinfo, '/report')) {
            // oro_report_view
            if (0 === strpos($pathinfo, '/report/view') && preg_match('#^/report/view(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_report_view')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::viewAction',));
            }

            // oro_report_create
            if ($pathinfo === '/report/create') {
                return array (  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::createAction',  '_route' => 'oro_report_create',);
            }

            // oro_report_update
            if (0 === strpos($pathinfo, '/report/update') && preg_match('#^/report/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_report_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::updateAction',));
            }

            // oro_report_index
            if (preg_match('#^/report(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_report_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_delete_report
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/reports/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_report;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_report')), array (  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\Api\\Rest\\ReportController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_report:

            // oro_api_options_reports
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/reports(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_reports;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_reports')), array (  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\Api\\Rest\\ReportController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_reports:

            // oro_api_options_reports_auto_877
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/report(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_reports_auto_877;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_reports_auto_877')), array (  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\Api\\Rest\\ReportController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_reports_auto_877:

        }

        if (0 === strpos($pathinfo, '/search')) {
            // oro_search_advanced
            if ($pathinfo === '/search/advanced-search') {
                return array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::ajaxAdvancedSearchAction',  '_route' => 'oro_search_advanced',);
            }

            if (0 === strpos($pathinfo, '/search/s')) {
                // oro_search_bar
                if ($pathinfo === '/search/search-bar') {
                    return array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::searchBarAction',  '_route' => 'oro_search_bar',);
                }

                // oro_search_suggestion
                if ($pathinfo === '/search/suggestion') {
                    return array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::searchSuggestionAction',  '_route' => 'oro_search_suggestion',);
                }

            }

            // oro_search_results
            if (rtrim($pathinfo, '/') === '/search') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oro_search_results');
                }

                return array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::searchResultsAction',  '_route' => 'oro_search_results',);
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_search
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/search(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_search;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_search')), array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\Api\\SearchController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_search:

            // oro_api_get_search_autocomplete
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/search/autocomplete(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_search_autocomplete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_search_autocomplete')), array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\Api\\SearchController::getAutocompleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_search_autocomplete:

            // oro_api_get_search_advanced
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/search/advanced(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_search_advanced;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_search_advanced')), array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\Api\\SearchAdvancedController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_search_advanced:

        }

        if (0 === strpos($pathinfo, '/segment')) {
            // oro_segment_index
            if (preg_match('#^/segment(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_segment_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::indexAction',));
            }

            // oro_segment_view
            if (0 === strpos($pathinfo, '/segment/view') && preg_match('#^/segment/view(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_segment_view')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::viewAction',));
            }

            // oro_segment_create
            if ($pathinfo === '/segment/create') {
                return array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::createAction',  '_route' => 'oro_segment_create',);
            }

            // oro_segment_update
            if (0 === strpos($pathinfo, '/segment/update') && preg_match('#^/segment/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_segment_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\SegmentController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/rest')) {
                // oro_api_get_segment_items
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/segment/items(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_segment_items;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_segment_items')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::getItemsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_segment_items:

                // oro_api_delete_segment
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/segments/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_segment;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_segment')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_segment:

                // oro_api_post_segment_run
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/segments/(?P<id>[^/]++)/runs(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_segment_run;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_segment_run')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::postRunAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_segment_run:

                // oro_api_options_segments
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/segments(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_segments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_segments')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_segments:

                // oro_api_options_segments_auto_878
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/segment(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_segments_auto_878;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_segments_auto_878')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_segments_auto_878:

                // oro_api_get_segment_items_deprecated
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/segments/(?P<entityName>[^/]++)/items(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_segment_items_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_segment_items_deprecated')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\DeprecatedSegmentController::getItemsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_segment_items_deprecated:

                // oro_api_post_segment_run_deprecated
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/segments/(?P<id>[^/]++)/run(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_segment_run_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_segment_run_deprecated')), array (  '_controller' => 'Oro\\Bundle\\SegmentBundle\\Controller\\Api\\Rest\\SegmentController::postRunAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_segment_run_deprecated:

                // oro_api_cget_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<placement>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_cget_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_cget_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_cget_sidebarwidgets:

                // oro_api_get_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<placement>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_sidebarwidgets:

                // oro_api_post_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_sidebarwidgets:

                // oro_api_put_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<widgetId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_sidebarwidgets:

                // oro_api_delete_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<widgetId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_sidebarwidgets:

                // oro_api_get_sidebars
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebars/(?P<position>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_sidebars;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_sidebars')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\SidebarController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_sidebars:

                // oro_api_post_sidebars
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebars(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_sidebars;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_sidebars')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\SidebarController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_sidebars:

                // oro_api_put_sidebars
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebars/(?P<stateId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_sidebars;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_sidebars')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\SidebarController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_sidebars:

            }

            // _webservice_call
            if (preg_match('#^/api/(?P<webservice>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__webservice_call;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_webservice_call')), array (  '_controller' => 'BeSimple\\SoapBundle\\Controller\\SoapWebServiceController::CallAction',  '_format' => 'soap',));
            }
            not__webservice_call:

            // _webservice_definition
            if (preg_match('#^/api/(?P<webservice>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__webservice_definition;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_webservice_definition')), array (  '_controller' => 'BeSimple\\SoapBundle\\Controller\\SoapWebServiceController::DefinitionAction',  '_format' => 'wsdl',));
            }
            not__webservice_definition:

        }

        if (0 === strpos($pathinfo, '/tag')) {
            // oro_tag_index
            if (preg_match('#^/tag(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tag_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::indexAction',));
            }

            // oro_tag_create
            if ($pathinfo === '/tag/create') {
                return array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::createAction',  '_route' => 'oro_tag_create',);
            }

            // oro_tag_update
            if (0 === strpos($pathinfo, '/tag/update') && preg_match('#^/tag/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tag_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::updateAction',));
            }

            // oro_tag_search
            if (0 === strpos($pathinfo, '/tag/search') && preg_match('#^/tag/search(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tag_search')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::searchAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_delete_tag
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/tags/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_tag;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_tag')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TagController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_tag:

            // oro_api_options_tags
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/tags(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_tags;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_tags')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TagController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_tags:

            // oro_api_options_tags_auto_879
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/tag(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_tags_auto_879;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_tags_auto_879')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TagController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_tags_auto_879:

        }

        if (0 === strpos($pathinfo, '/translation')) {
            // oro_translation_available_translations
            if ($pathinfo === '/translation/available-translations') {
                return array (  '_controller' => 'Oro\\Bundle\\TranslationBundle\\Controller\\ServiceController::availableTranslationsAction',  '_route' => 'oro_translation_available_translations',);
            }

            // oro_translation_download
            if (0 === strpos($pathinfo, '/translation/download') && preg_match('#^/translation/download(?:/(?P<code>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_translation_download')), array (  'code' => NULL,  '_controller' => 'Oro\\Bundle\\TranslationBundle\\Controller\\ServiceController::downloadAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_translations
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/translations(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_translations;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_translations')), array (  '_controller' => 'Oro\\Bundle\\TranslationBundle\\Controller\\Api\\Rest\\TranslationController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_translations:

            // oro_api_cget_windows
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_cget_windows;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_cget_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_cget_windows:

            // oro_api_get_windows
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_windows;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_windows:

            // oro_api_post_windows
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_windows;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_windows:

            // oro_api_put_windows
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows/(?P<windowId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_windows;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_windows:

            // oro_api_delete_windows
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows/(?P<windowId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_windows;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_windows:

            // oro_workflow_api_rest_entity_get
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflowentity$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_entity_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_entity_get')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\EntityController::getAction',));
            }
            not_oro_workflow_api_rest_entity_get:

            // oro_workflow_api_rest_process_activate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/process/activate/(?P<processDefinition>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_process_activate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_process_activate')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\ProcessController::activateAction',));
            }
            not_oro_workflow_api_rest_process_activate:

            // oro_workflow_api_rest_process_deactivate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/process/deactivate/(?P<processDefinition>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_process_deactivate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_process_deactivate')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\ProcessController::deactivateAction',));
            }
            not_oro_workflow_api_rest_process_deactivate:

            // oro_workflow_api_rest_workflow_start
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/start/(?P<workflowName>[^/]++)/(?P<transitionName>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_workflow_start;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_start')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::startAction',));
            }
            not_oro_workflow_api_rest_workflow_start:

            // oro_workflow_api_rest_workflow_transit
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/transit/(?P<workflowItemId>\\d+)/(?P<transitionName>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_workflow_transit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_transit')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::transitAction',));
            }
            not_oro_workflow_api_rest_workflow_transit:

            // oro_workflow_api_rest_workflow_get
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/(?P<workflowItemId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_workflow_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_get')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::getAction',));
            }
            not_oro_workflow_api_rest_workflow_get:

            // oro_workflow_api_rest_workflow_delete
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/(?P<workflowItemId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_workflow_api_rest_workflow_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_delete')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deleteAction',));
            }
            not_oro_workflow_api_rest_workflow_delete:

            // oro_workflow_api_rest_workflow_activate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/activate/(?P<workflowDefinition>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_workflow_activate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_activate')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::activateAction',));
            }
            not_oro_workflow_api_rest_workflow_activate:

            // oro_workflow_api_rest_workflow_deactivate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/deactivate/(?P<entityClass>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_workflow_deactivate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_deactivate')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deactivateAction',));
            }
            not_oro_workflow_api_rest_workflow_deactivate:

            // oro_workflow_api_rest_workflowdefinition_get
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/workflowdefinition/(?P<workflowDefinition>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_workflowdefinition_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflowdefinition_get')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::getAction',));
            }
            not_oro_workflow_api_rest_workflowdefinition_get:

            // oro_workflow_api_rest_workflowdefinition_put
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/workflowdefinition/(?P<workflowDefinition>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_workflow_api_rest_workflowdefinition_put;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflowdefinition_put')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::putAction',));
            }
            not_oro_workflow_api_rest_workflowdefinition_put:

            // oro_workflow_api_rest_workflowdefinition_post
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/workflowdefinition(?:/(?P<workflowDefinition>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_workflow_api_rest_workflowdefinition_post;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflowdefinition_post')), array (  'version' => 'latest',  '_format' => 'json',  'workflowDefinition' => NULL,  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::postAction',));
            }
            not_oro_workflow_api_rest_workflowdefinition_post:

            // oro_workflow_api_rest_workflowdefinition_delete
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/workflowdefinition/(?P<workflowDefinition>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_workflow_api_rest_workflowdefinition_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflowdefinition_delete')), array (  'version' => 'latest',  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::deleteAction',));
            }
            not_oro_workflow_api_rest_workflowdefinition_delete:

        }

        if (0 === strpos($pathinfo, '/processdefinition')) {
            // oro_process_definition_index
            if ($pathinfo === '/processdefinition') {
                return array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\ProcessDefinitionController::indexAction',  '_route' => 'oro_process_definition_index',);
            }

            // oro_process_definition_view
            if (0 === strpos($pathinfo, '/processdefinition/view') && preg_match('#^/processdefinition/view/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_process_definition_view')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\ProcessDefinitionController::viewAction',));
            }

        }

        if (0 === strpos($pathinfo, '/workflow')) {
            if (0 === strpos($pathinfo, '/workflowwidget')) {
                // oro_workflow_widget_steps
                if (0 === strpos($pathinfo, '/workflowwidget/steps') && preg_match('#^/workflowwidget/steps/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_steps')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::stepsAction',));
                }

                if (0 === strpos($pathinfo, '/workflowwidget/transition')) {
                    // oro_workflow_widget_start_transition_form
                    if (0 === strpos($pathinfo, '/workflowwidget/transition/create/attributes') && preg_match('#^/workflowwidget/transition/create/attributes/(?P<workflowName>[^/]++)/(?P<transitionName>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_start_transition_form')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::startTransitionFormAction',));
                    }

                    // oro_workflow_widget_transition_form
                    if (0 === strpos($pathinfo, '/workflowwidget/transition/edit/attributes') && preg_match('#^/workflowwidget/transition/edit/attributes/(?P<workflowItemId>[^/]++)/(?P<transitionName>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_transition_form')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::transitionFormAction',));
                    }

                }

                // oro_workflow_widget_buttons
                if (0 === strpos($pathinfo, '/workflowwidget/buttons') && preg_match('#^/workflowwidget/buttons/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_buttons')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::buttonsAction',));
                }

            }

            // oro_workflow_start_transition_form
            if (0 === strpos($pathinfo, '/workflow/start') && preg_match('#^/workflow/start/(?P<workflowName>[^/]++)/(?P<transitionName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_start_transition_form')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowController::startTransitionAction',));
            }

            // oro_workflow_transition_form
            if (0 === strpos($pathinfo, '/workflow/transit') && preg_match('#^/workflow/transit/(?P<workflowItemId>[^/]++)/(?P<transitionName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_transition_form')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowController::transitionAction',));
            }

            if (0 === strpos($pathinfo, '/workflowdefinition')) {
                // oro_workflow_definition_index
                if ($pathinfo === '/workflowdefinition') {
                    return array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::indexAction',  '_route' => 'oro_workflow_definition_index',);
                }

                // oro_workflow_definition_create
                if ($pathinfo === '/workflowdefinition/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::createAction',  '_route' => 'oro_workflow_definition_create',);
                }

                // oro_workflow_definition_update
                if (0 === strpos($pathinfo, '/workflowdefinition/update') && preg_match('#^/workflowdefinition/update/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_definition_update')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::updateAction',));
                }

                // oro_workflow_definition_clone
                if (0 === strpos($pathinfo, '/workflowdefinition/clone') && preg_match('#^/workflowdefinition/clone/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_definition_clone')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::cloneAction',));
                }

                // oro_workflow_definition_view
                if (0 === strpos($pathinfo, '/workflowdefinition/view') && preg_match('#^/workflowdefinition/view/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_definition_view')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::viewAction',));
                }

                // oro_workflow_definition_info
                if (0 === strpos($pathinfo, '/workflowdefinition/info') && preg_match('#^/workflowdefinition/info/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_definition_info')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowDefinitionController::infoAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/api/rest')) {
                // oro_api_workflow_start
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/start/(?P<workflowName>[^/]++)/(?P<transitionName>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_workflow_start;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_start')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::startAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_start:

                // oro_api_workflow_transit
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/transit/(?P<workflowItemId>\\d+)/(?P<transitionName>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_workflow_transit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_transit')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::transitAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_transit:

                // oro_api_workflow_delete
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/(?P<workflowItemId>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_workflow_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_delete')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deleteAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_delete:

                // oro_api_workflow_activate
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/activate/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_workflow_activate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_activate')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::activateAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_activate:

                // oro_api_workflow_deactivate
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/deactivate/(?P<entityClass>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_workflow_deactivate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_deactivate')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deactivateAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_deactivate:

                // oro_api_workflow_definition_get
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflowdefinition/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_workflow_definition_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_definition_get')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::getAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_definition_get:

                // oro_api_workflow_definition_put
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflowdefinition/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_workflow_definition_put;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_definition_put')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::putAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_definition_put:

                // oro_api_workflow_definition_post
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflowdefinition(?:/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?)?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_workflow_definition_post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_definition_post')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::postAction',  'version' => 'latest',  '_format' => 'json',  'workflowDefinition' => NULL,));
                }
                not_oro_api_workflow_definition_post:

                // oro_api_workflow_definition_delete
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflowdefinition/(?P<workflowDefinition>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_workflow_definition_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_definition_delete')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowDefinitionController::deleteAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_definition_delete:

                // oro_api_workflow_get
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflowentity(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_workflow_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_get')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\EntityController::getAction',  'version' => 'latest',  '_format' => 'json',));
                }
                not_oro_api_workflow_get:

            }

            // orocrm_activity_contact_metrics
            if (0 === strpos($pathinfo, '/activity-contact/metrics') && preg_match('#^/activity\\-contact/metrics/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_activity_contact_metrics')), array (  '_controller' => 'OroCRM\\Bundle\\ActivityContactBundle\\Controller\\ActivityContactController::metricsAction',));
            }

        }

        // orocrm_report_index
        if (0 === strpos($pathinfo, '/report/static') && preg_match('#^/report/static/(?P<reportGroupName>\\w+)/(?P<reportName>\\w+)(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_report_index')), array (  '_format' => 'html',  '_controller' => 'OroCRM\\Bundle\\ReportBundle\\Controller\\ReportController::indexAction',));
        }

        // oro_comment_form
        if ($pathinfo === '/comments/form') {
            return array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\CommentController::getFormAction',  '_route' => 'oro_comment_form',);
        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_comment_get_items
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/relation/(?P<relationClass>[^/]++)/(?P<relationId>[^/]++)/comment(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_comment_get_items;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_get_items')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_comment_get_items:

            // oro_api_comment_create_item
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/relation/(?P<relationClass>[^/]++)/(?P<relationId>[^/]++)/comment(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_comment_create_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_create_item')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_comment_create_item:

            // oro_api_comment_get_item
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/comment/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_comment_get_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_get_item')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_comment_get_item:

            // oro_api_comment_update_item
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/comment/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_comment_update_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_update_item')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_comment_update_item:

            // oro_api_comment_remove_attachment_item
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/comment/(?P<id>[^/]++)/removeAttachment(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_comment_remove_attachment_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_remove_attachment_item')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::removeAttachmentAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_comment_remove_attachment_item:

            // oro_api_comment_delete_item
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/comment/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_comment_delete_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_comment_delete_item')), array (  '_controller' => 'Oro\\Bundle\\CommentBundle\\Controller\\Api\\Rest\\CommentController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_comment_delete_item:

        }

        if (0 === strpos($pathinfo, '/dashboard')) {
            // oro_dashboard_index
            if (preg_match('#^/dashboard(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::indexAction',));
            }

            // oro_dashboard_view
            if (0 === strpos($pathinfo, '/dashboard/view') && preg_match('#^/dashboard/view(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_view')), array (  'id' => '0',  'dashboard' => NULL,  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::viewAction',));
            }

            // oro_dashboard_configure
            if (0 === strpos($pathinfo, '/dashboard/configure') && preg_match('#^/dashboard/configure/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_oro_dashboard_configure;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_configure')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::configureAction',));
            }
            not_oro_dashboard_configure:

            // oro_dashboard_update
            if (0 === strpos($pathinfo, '/dashboard/update') && preg_match('#^/dashboard/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::updateAction',));
            }

            // oro_dashboard_create
            if ($pathinfo === '/dashboard/create') {
                return array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::createAction',  '_route' => 'oro_dashboard_create',);
            }

            // oro_dashboard_widget
            if (0 === strpos($pathinfo, '/dashboard/widget') && preg_match('#^/dashboard/widget/(?P<widget>[\\w-]+)/(?P<bundle>\\w+)/(?P<name>[\\w-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::widgetAction',));
            }

            if (0 === strpos($pathinfo, '/dashboard/itemized_')) {
                // oro_dashboard_itemized_widget
                if (0 === strpos($pathinfo, '/dashboard/itemized_widget') && preg_match('#^/dashboard/itemized_widget/(?P<widget>[\\w-]+)/(?P<bundle>\\w+)/(?P<name>[\\w-]+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_itemized_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::itemizedWidgetAction',));
                }

                // oro_dashboard_itemized_data_widget
                if (0 === strpos($pathinfo, '/dashboard/itemized_data_widget') && preg_match('#^/dashboard/itemized_data_widget/(?P<widget>[\\w-]+)/(?P<bundle>\\w+)/(?P<name>[\\w-]+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_itemized_data_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::itemizedDataWidgetAction',));
                }

            }

            // oro_dashboard_quick_launchpad
            if ($pathinfo === '/dashboard/launchpad') {
                return array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::quickLaunchpadAction',  '_route' => 'oro_dashboard_quick_launchpad',);
            }

            // oro_dashboard_grid
            if (0 === strpos($pathinfo, '/dashboard/grid') && preg_match('#^/dashboard/grid/(?P<widget>[^/]++)/(?P<gridName>[\\w\\:-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_grid')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::gridAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_put_dashboard_widget
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/dashboards/(?P<dashboardId>[^/]++)/widgets/(?P<widgetId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_dashboard_widget;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_dashboard_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_dashboard_widget:

            // oro_api_delete_dashboard_widget
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/dashboards/(?P<dashboardId>[^/]++)/widgets/(?P<widgetId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_dashboard_widget;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_dashboard_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_dashboard_widget:

            // oro_api_put_dashboard_widget_positions
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/dashboards/(?P<dashboardId>[^/]++)/widget/positions(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_dashboard_widget_positions;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_dashboard_widget_positions')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::putPositionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_dashboard_widget_positions:

            // oro_api_post_dashboard_widget_add_widget
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/dashboards/widgets/adds/widgets(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_dashboard_widget_add_widget;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_dashboard_widget_add_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::postAddWidgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_dashboard_widget_add_widget:

            // oro_api_delete_dashboard
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/dashboards/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_dashboard;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_dashboard')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\DashboardController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_dashboard:

            // oro_api_post_dashboard_widget_add_widget_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/dashboard/widget/add/widget(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_dashboard_widget_add_widget_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_dashboard_widget_add_widget_deprecated')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\Api\\Rest\\WidgetController::postAddWidgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_dashboard_widget_add_widget_deprecated:

        }

        // oro_shortcut_actionslist
        if ($pathinfo === '/shortcutactionslist') {
            return array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\ShortcutController::actionslistAction',  '_route' => 'oro_shortcut_actionslist',);
        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_navigationitems
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_navigationitems;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_navigationitems')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_navigationitems:

            // oro_api_post_navigationitems
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_navigationitems;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_navigationitems')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_navigationitems:

            // oro_api_put_navigationitems_id
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/]++)/ids/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_navigationitems_id;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_navigationitems_id')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::putIdAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_navigationitems_id:

            // oro_api_delete_navigationitems_id
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/]++)/ids/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_navigationitems_id;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_navigationitems_id')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::deleteIdAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_navigationitems_id:

            // oro_api_get_shortcuts
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/shortcuts/(?P<query>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_shortcuts;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_shortcuts')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\ShortcutsController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_shortcuts:

            // oro_api_get_pagestates
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_pagestates;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestates')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_pagestates:

            // oro_api_get_pagestate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_pagestate:

            // oro_api_post_pagestate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_pagestate:

            // oro_api_put_pagestate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_pagestate:

            // oro_api_delete_pagestate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_pagestate:

            // oro_api_get_pagestate_checkid
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestate/checkid(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_pagestate_checkid;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestate_checkid')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::getCheckidAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_pagestate_checkid:

        }

        // oro_pinbar_help
        if ($pathinfo === '/pinbar/help') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroNavigationBundle:Pinbar:help.html.twig',  '_route' => 'oro_pinbar_help',);
        }

        // oro_api_post_pagestate_deprecated
        if (0 === strpos($pathinfo, '/api/rest') && preg_match('#^/api/rest/(?P<version>latest|v1)/pagestate(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_oro_api_post_pagestate_deprecated;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_pagestate_deprecated')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::postAction',  '_format' => 'json',  'version' => 'latest',));
        }
        not_oro_api_post_pagestate_deprecated:

        if (0 === strpos($pathinfo, '/contact')) {
            // orocrm_contact_address_book
            if (0 === strpos($pathinfo, '/contact/address-book') && preg_match('#^/contact/address\\-book/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_contact_address_book')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\ContactAddressController::addressBookAction',));
            }

            // orocrm_contact_address_create
            if (preg_match('#^/contact/(?P<contactId>\\d+)/address\\-create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_contact_address_create')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\ContactAddressController::createAction',));
            }

            // orocrm_contact_address_update
            if (preg_match('#^/contact/(?P<contactId>\\d+)/address\\-update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_contact_address_update')), array (  'id' => 0,  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\ContactAddressController::updateAction',));
            }

            // orocrm_contact_view
            if (0 === strpos($pathinfo, '/contact/view') && preg_match('#^/contact/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_contact_view')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\ContactController::viewAction',));
            }

            // orocrm_contact_info
            if (0 === strpos($pathinfo, '/contact/info') && preg_match('#^/contact/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_contact_info')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\ContactController::infoAction',));
            }

            // orocrm_contact_create
            if ($pathinfo === '/contact/create') {
                return array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\ContactController::createAction',  '_route' => 'orocrm_contact_create',);
            }

            // orocrm_contact_update
            if (0 === strpos($pathinfo, '/contact/update') && preg_match('#^/contact/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_contact_update')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\ContactController::updateAction',));
            }

            // orocrm_contact_index
            if (preg_match('#^/contact(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_contact_index')), array (  '_format' => 'html',  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\ContactController::indexAction',));
            }

            // orocrm_account_widget_contacts
            if (0 === strpos($pathinfo, '/contact/widget/account-contacts') && preg_match('#^/contact/widget/account\\-contacts/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_account_widget_contacts')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\ContactController::accountContactsAction',));
            }

            if (0 === strpos($pathinfo, '/contact/group')) {
                // orocrm_contact_group_create
                if ($pathinfo === '/contact/group/create') {
                    return array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\GroupController::createAction',  '_route' => 'orocrm_contact_group_create',);
                }

                // orocrm_contact_group_update
                if (0 === strpos($pathinfo, '/contact/group/update') && preg_match('#^/contact/group/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_contact_group_update')), array (  'id' => 0,  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\GroupController::updateAction',));
                }

                // orocrm_contact_group_index
                if (preg_match('#^/contact/group(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_contact_group_index')), array (  '_format' => 'html',  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\GroupController::indexAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/api/rest')) {
                // oro_api_get_contacts
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contacts(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contacts;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contacts')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contacts:

                // oro_api_get_contact
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contacts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contact;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contact')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contact:

                // oro_api_put_contact
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contacts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_contact;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_contact')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_contact:

                // oro_api_post_contact
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contacts(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_contact;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_contact')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_contact:

                // oro_api_delete_contact
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contacts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_contact;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_contact')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_contact:

                // oro_api_options_contacts
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contacts(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contacts;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contacts')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contacts:

                // oro_api_options_contacts_auto_880
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contact(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contacts_auto_880;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contacts_auto_880')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contacts_auto_880:

                // oro_api_get_contactgroups
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contactgroups(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contactgroups;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contactgroups')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contactgroups:

                // oro_api_get_contactgroup
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contactgroups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contactgroup;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contactgroup')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contactgroup:

                // oro_api_put_contactgroup
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contactgroups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_contactgroup;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_contactgroup')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_contactgroup:

                // oro_api_post_contactgroup
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contactgroups(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_contactgroup;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_contactgroup')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_contactgroup:

                // oro_api_delete_contactgroup
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contactgroups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_contactgroup;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_contactgroup')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_contactgroup:

                // oro_api_options_contactgroups
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contactgroups(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contactgroups;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contactgroups')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contactgroups:

                // oro_api_options_contactgroups_auto_881
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contactgroup(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contactgroups_auto_881;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contactgroups_auto_881')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contactgroups_auto_881:

                // oro_api_get_contact_address
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contacts/(?P<contactId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contact_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contact_address')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contact_address:

                // oro_api_get_contact_addresses
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contacts/(?P<contactId>[^/]++)/addresses(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contact_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contact_addresses')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contact_addresses:

                // oro_api_delete_contact_address
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contacts/(?P<contactId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_contact_address;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_contact_address')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_contact_address:

                // oro_api_get_contact_address_by_type
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contacts/(?P<contactId>[^/]++)/addresses/(?P<typeName>[^/]++)/by/type(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contact_address_by_type;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contact_address_by_type')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::getByTypeAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contact_address_by_type:

                // oro_api_get_contact_address_primary
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contacts/(?P<contactId>[^/]++)/address/primary(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contact_address_primary;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contact_address_primary')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::getPrimaryAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contact_address_primary:

                // oro_api_options_contact_addresses
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contact/addresses(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contact_addresses;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contact_addresses')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contact_addresses:

                // oro_api_options_contact_addresses_auto_882
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contact/address(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contact_addresses_auto_882;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contact_addresses_auto_882')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contact_addresses_auto_882:

                // oro_api_get_contact_phones
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contacts/(?P<contactId>[^/]++)/phones(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contact_phones;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contact_phones')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactPhoneController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contact_phones:

                // oro_api_get_contact_phone_primary
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contacts/(?P<contactId>[^/]++)/phone/primary(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_contact_phone_primary;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_contact_phone_primary')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactPhoneController::getPrimaryAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_contact_phone_primary:

                // oro_api_options_contact_phones
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contact/phones(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contact_phones;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contact_phones')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactPhoneController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contact_phones:

                // oro_api_options_contact_phones_auto_883
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contact/phone(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_contact_phones_auto_883;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_contact_phones_auto_883')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactPhoneController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_contact_phones_auto_883:

                // oro_api_post_contact_deprecated
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contact(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_contact_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_contact_deprecated')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_contact_deprecated:

                // oro_api_post_contactgroup_deprecated
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/contactgroup(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_contactgroup_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_contactgroup_deprecated')), array (  '_controller' => 'OroCRM\\Bundle\\ContactBundle\\Controller\\Api\\Rest\\ContactGroupController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_contactgroup_deprecated:

            }

            if (0 === strpos($pathinfo, '/account')) {
                // orocrm_account_view
                if (0 === strpos($pathinfo, '/account/view') && preg_match('#^/account/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_account_view')), array (  '_controller' => 'OroCRM\\Bundle\\AccountBundle\\Controller\\AccountController::viewAction',));
                }

                // orocrm_account_create
                if ($pathinfo === '/account/create') {
                    return array (  '_controller' => 'OroCRM\\Bundle\\AccountBundle\\Controller\\AccountController::createAction',  '_route' => 'orocrm_account_create',);
                }

                // orocrm_account_update
                if (0 === strpos($pathinfo, '/account/update') && preg_match('#^/account/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_account_update')), array (  '_controller' => 'OroCRM\\Bundle\\AccountBundle\\Controller\\AccountController::updateAction',));
                }

                // orocrm_account_index
                if (preg_match('#^/account(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_account_index')), array (  '_format' => 'html',  '_controller' => 'OroCRM\\Bundle\\AccountBundle\\Controller\\AccountController::indexAction',));
                }

                if (0 === strpos($pathinfo, '/account/widget')) {
                    // orocrm_account_widget_contacts_info
                    if (0 === strpos($pathinfo, '/account/widget/contacts') && preg_match('#^/account/widget/contacts(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_account_widget_contacts_info')), array (  'id' => 0,  'account' => NULL,  '_controller' => 'OroCRM\\Bundle\\AccountBundle\\Controller\\AccountController::contactsInfoAction',));
                    }

                    // orocrm_account_widget_info
                    if (0 === strpos($pathinfo, '/account/widget/info') && preg_match('#^/account/widget/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_account_widget_info')), array (  '_controller' => 'OroCRM\\Bundle\\AccountBundle\\Controller\\AccountController::infoAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/api/rest')) {
                // oro_api_get_accounts
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/accounts(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_accounts;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_accounts')), array (  '_controller' => 'OroCRM\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_accounts:

                // oro_api_get_account
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/accounts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_account;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_account')), array (  '_controller' => 'OroCRM\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_account:

                // oro_api_put_account
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/accounts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_account;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_account')), array (  '_controller' => 'OroCRM\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_account:

                // oro_api_post_account
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/accounts(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_account;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_account')), array (  '_controller' => 'OroCRM\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_account:

                // oro_api_delete_account
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/accounts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_account;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_account')), array (  '_controller' => 'OroCRM\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_account:

                // oro_api_options_accounts
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/accounts(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_accounts;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_accounts')), array (  '_controller' => 'OroCRM\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_accounts:

                // oro_api_options_accounts_auto_884
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/account(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_oro_api_options_accounts_auto_884;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_accounts_auto_884')), array (  '_controller' => 'OroCRM\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_options_accounts_auto_884:

                // oro_api_post_account_deprecated
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/account(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_account_deprecated;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_account_deprecated')), array (  '_controller' => 'OroCRM\\Bundle\\AccountBundle\\Controller\\Api\\Rest\\AccountController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_account_deprecated:

            }

        }

        if (0 === strpos($pathinfo, '/marketing')) {
            if (0 === strpos($pathinfo, '/marketinglist')) {
                if (0 === strpos($pathinfo, '/marketinglist/contact-information')) {
                    // orocrm_marketinglist_api_rest_marketinglist_contactinformationfieldtype
                    if ($pathinfo === '/marketinglist/contact-information/field/type') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_orocrm_marketinglist_api_rest_marketinglist_contactinformationfieldtype;
                        }

                        return array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListController::contactInformationFieldTypeAction',  '_route' => 'orocrm_marketinglist_api_rest_marketinglist_contactinformationfieldtype',);
                    }
                    not_orocrm_marketinglist_api_rest_marketinglist_contactinformationfieldtype:

                    // orocrm_marketinglist_api_rest_marketinglist_entitycontactinformationfields
                    if ($pathinfo === '/marketinglist/contact-information/entity/fields') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_orocrm_marketinglist_api_rest_marketinglist_entitycontactinformationfields;
                        }

                        return array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListController::entityContactInformationFieldsAction',  '_route' => 'orocrm_marketinglist_api_rest_marketinglist_entitycontactinformationfields',);
                    }
                    not_orocrm_marketinglist_api_rest_marketinglist_entitycontactinformationfields:

                }

                // orocrm_marketinglist_api_rest_marketinglistremoveditem_remove
                if (preg_match('#^/marketinglist/(?P<marketingList>[^/]++)/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_orocrm_marketinglist_api_rest_marketinglistremoveditem_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_marketinglist_api_rest_marketinglistremoveditem_remove')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::removeAction',));
                }
                not_orocrm_marketinglist_api_rest_marketinglistremoveditem_remove:

                // orocrm_marketinglist_api_rest_marketinglistremoveditem_unremove
                if (preg_match('#^/marketinglist/(?P<marketingList>[^/]++)/unremove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_orocrm_marketinglist_api_rest_marketinglistremoveditem_unremove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_marketinglist_api_rest_marketinglistremoveditem_unremove')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::unremoveAction',));
                }
                not_orocrm_marketinglist_api_rest_marketinglistremoveditem_unremove:

                // orocrm_marketinglist_api_rest_marketinglistunsubscribeditem_unsubscribe
                if (preg_match('#^/marketinglist/(?P<marketingList>[^/]++)/unsubscribe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_orocrm_marketinglist_api_rest_marketinglistunsubscribeditem_unsubscribe;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_marketinglist_api_rest_marketinglistunsubscribeditem_unsubscribe')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::unsubscribeAction',));
                }
                not_orocrm_marketinglist_api_rest_marketinglistunsubscribeditem_unsubscribe:

                // orocrm_marketinglist_api_rest_marketinglistunsubscribeditem_subscribe
                if (preg_match('#^/marketinglist/(?P<marketingList>[^/]++)/subscribe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_orocrm_marketinglist_api_rest_marketinglistunsubscribeditem_subscribe;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_marketinglist_api_rest_marketinglistunsubscribeditem_subscribe')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::subscribeAction',));
                }
                not_orocrm_marketinglist_api_rest_marketinglistunsubscribeditem_subscribe:

            }

            if (0 === strpos($pathinfo, '/marketing-list')) {
                // orocrm_marketing_list_index
                if (rtrim($pathinfo, '/') === '/marketing-list') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'orocrm_marketing_list_index');
                    }

                    return array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\MarketingListController::indexAction',  '_route' => 'orocrm_marketing_list_index',);
                }

                // orocrm_marketing_list_view
                if (0 === strpos($pathinfo, '/marketing-list/view') && preg_match('#^/marketing\\-list/view(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_marketing_list_view')), array (  'id' => 0,  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\MarketingListController::viewAction',));
                }

                // orocrm_marketing_list_create
                if ($pathinfo === '/marketing-list/create') {
                    return array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\MarketingListController::createAction',  '_route' => 'orocrm_marketing_list_create',);
                }

                // orocrm_marketing_list_update
                if (0 === strpos($pathinfo, '/marketing-list/update') && preg_match('#^/marketing\\-list/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_marketing_list_update')), array (  'id' => 0,  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\MarketingListController::updateAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // orocrm_api_contact_marketinglist_information_field_type
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglist/contact\\-information/field/type(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orocrm_api_contact_marketinglist_information_field_type;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_contact_marketinglist_information_field_type')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListController::contactInformationFieldTypeAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_contact_marketinglist_information_field_type:

            // orocrm_api_entity_marketinglist_contact_information_fields
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglist/contact\\-information/entity/fields(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orocrm_api_entity_marketinglist_contact_information_fields;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_entity_marketinglist_contact_information_fields')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListController::entityContactInformationFieldsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_entity_marketinglist_contact_information_fields:

            // orocrm_api_delete_marketinglist
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglists/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_orocrm_api_delete_marketinglist;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_delete_marketinglist')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_delete_marketinglist:

            // orocrm_api_options_marketinglists
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglists(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_orocrm_api_options_marketinglists;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_options_marketinglists')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_options_marketinglists:

            // orocrm_api_options_marketinglists_auto_885
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglist(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_orocrm_api_options_marketinglists_auto_885;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_options_marketinglists_auto_885')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_options_marketinglists_auto_885:

            // orocrm_api_remove_marketinglist_removeditem
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglist/(?P<marketingList>[^/]++)/remove/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orocrm_api_remove_marketinglist_removeditem;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_remove_marketinglist_removeditem')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::removeAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_remove_marketinglist_removeditem:

            // orocrm_api_unremove_marketinglist_removeditem
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglist/(?P<marketingList>[^/]++)/unremove/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orocrm_api_unremove_marketinglist_removeditem;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_unremove_marketinglist_removeditem')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::unremoveAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_unremove_marketinglist_removeditem:

            // orocrm_api_post_marketinglist_removeditem
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglists/removeditems(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_orocrm_api_post_marketinglist_removeditem;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_post_marketinglist_removeditem')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_post_marketinglist_removeditem:

            // orocrm_api_delete_marketinglist_removeditem
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglists/(?P<id>[^/]++)/removeditem(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_orocrm_api_delete_marketinglist_removeditem;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_delete_marketinglist_removeditem')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_delete_marketinglist_removeditem:

            // orocrm_api_options_marketinglist_removeditems
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglist/removeditems(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_orocrm_api_options_marketinglist_removeditems;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_options_marketinglist_removeditems')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_options_marketinglist_removeditems:

            // orocrm_api_options_marketinglist_removeditems_auto_886
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglist/removeditem(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_orocrm_api_options_marketinglist_removeditems_auto_886;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_options_marketinglist_removeditems_auto_886')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_options_marketinglist_removeditems_auto_886:

            // orocrm_api_unsubscribe_marketinglist_unsubscribeditem
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglist/(?P<marketingList>[^/]++)/unsubscribe/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orocrm_api_unsubscribe_marketinglist_unsubscribeditem;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_unsubscribe_marketinglist_unsubscribeditem')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::unsubscribeAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_unsubscribe_marketinglist_unsubscribeditem:

            // orocrm_api_subscribe_marketinglist_unsubscribeditem
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglist/(?P<marketingList>[^/]++)/subscribe/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orocrm_api_subscribe_marketinglist_unsubscribeditem;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_subscribe_marketinglist_unsubscribeditem')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::subscribeAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_subscribe_marketinglist_unsubscribeditem:

            // orocrm_api_post_marketinglist_unsubscribeditem
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglists/unsubscribeditems(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_orocrm_api_post_marketinglist_unsubscribeditem;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_post_marketinglist_unsubscribeditem')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_post_marketinglist_unsubscribeditem:

            // orocrm_api_delete_marketinglist_unsubscribeditem
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglists/(?P<id>[^/]++)/unsubscribeditem(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_orocrm_api_delete_marketinglist_unsubscribeditem;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_delete_marketinglist_unsubscribeditem')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_delete_marketinglist_unsubscribeditem:

            // orocrm_api_options_marketinglist_unsubscribeditems
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglist/unsubscribeditems(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_orocrm_api_options_marketinglist_unsubscribeditems;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_options_marketinglist_unsubscribeditems')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_options_marketinglist_unsubscribeditems:

            // orocrm_api_options_marketinglist_unsubscribeditems_auto_887
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglist/unsubscribeditem(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_orocrm_api_options_marketinglist_unsubscribeditems_auto_887;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_options_marketinglist_unsubscribeditems_auto_887')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_options_marketinglist_unsubscribeditems_auto_887:

            // orocrm_api_post_marketinglist_segment_run
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglists/(?P<id>[^/]++)/segments/runs(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_orocrm_api_post_marketinglist_segment_run;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_post_marketinglist_segment_run')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\SegmentController::postRunAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_post_marketinglist_segment_run:

            // orocrm_api_options_marketinglist_segments
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglist/segments(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_orocrm_api_options_marketinglist_segments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_options_marketinglist_segments')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\SegmentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_options_marketinglist_segments:

            // orocrm_api_post_marketinglist_removeditem_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglist/removeditem(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_orocrm_api_post_marketinglist_removeditem_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_post_marketinglist_removeditem_deprecated')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListRemovedItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_post_marketinglist_removeditem_deprecated:

            // orocrm_api_post_marketinglist_segment_run_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglists/(?P<id>[^/]++)/segment/run(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_orocrm_api_post_marketinglist_segment_run_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_post_marketinglist_segment_run_deprecated')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\SegmentController::postRunAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_post_marketinglist_segment_run_deprecated:

            // orocrm_api_post_marketinglist_unsubscribeditem_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/marketinglist/unsubscribeditem(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_orocrm_api_post_marketinglist_unsubscribeditem_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_post_marketinglist_unsubscribeditem_deprecated')), array (  '_controller' => 'OroCRM\\Bundle\\MarketingListBundle\\Controller\\Api\\Rest\\MarketingListUnsubscribedItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_post_marketinglist_unsubscribeditem_deprecated:

        }

        if (0 === strpos($pathinfo, '/tracking')) {
            // oro_tracking_data_create
            if ($pathinfo === '/tracking/data/create') {
                return array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingDataController::createAction',  '_route' => 'oro_tracking_data_create',);
            }

            if (0 === strpos($pathinfo, '/tracking/website')) {
                // oro_tracking_website_index
                if (preg_match('#^/tracking/website(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tracking_website_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingWebsiteController::indexAction',));
                }

                // oro_tracking_website_create
                if ($pathinfo === '/tracking/website/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingWebsiteController::createAction',  '_route' => 'oro_tracking_website_create',);
                }

                // oro_tracking_website_update
                if (0 === strpos($pathinfo, '/tracking/website/update') && preg_match('#^/tracking/website/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tracking_website_update')), array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingWebsiteController::updateAction',));
                }

                // oro_tracking_website_view
                if (0 === strpos($pathinfo, '/tracking/website/view') && preg_match('#^/tracking/website/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tracking_website_view')), array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\TrackingWebsiteController::viewAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_delete_tracking_website
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/trackings/(?P<id>[^/]++)/website(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_tracking_website;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_tracking_website')), array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\Api\\Rest\\TrackingWebsiteController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_tracking_website:

            // oro_api_options_tracking_websites
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/tracking/websites(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_tracking_websites;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_tracking_websites')), array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\Api\\Rest\\TrackingWebsiteController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_tracking_websites:

            // oro_api_options_tracking_websites_auto_888
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/tracking/website(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_tracking_websites_auto_888;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_tracking_websites_auto_888')), array (  '_controller' => 'Oro\\Bundle\\TrackingBundle\\Controller\\Api\\Rest\\TrackingWebsiteController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_tracking_websites_auto_888:

            // oro_api_post_reminder_shown
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/reminders/showns(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_reminder_shown;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_reminder_shown')), array (  '_controller' => 'Oro\\Bundle\\ReminderBundle\\Controller\\Api\\Rest\\ReminderController::postShownAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_reminder_shown:

            // oro_api_post_reminder_shown_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/reminder/shown(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_reminder_shown_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_reminder_shown_deprecated')), array (  '_controller' => 'Oro\\Bundle\\ReminderBundle\\Controller\\Api\\Rest\\ReminderController::postShownAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_reminder_shown_deprecated:

        }

        if (0 === strpos($pathinfo, '/call')) {
            // orocrm_call_activity_view
            if (0 === strpos($pathinfo, '/call/activity/view') && preg_match('#^/call/activity/view/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_call_activity_view')), array (  '_controller' => 'OroCRM\\Bundle\\CallBundle\\Controller\\CallController::activityAction',));
            }

            // orocrm_call_create
            if ($pathinfo === '/call/create') {
                return array (  '_controller' => 'OroCRM\\Bundle\\CallBundle\\Controller\\CallController::createAction',  '_route' => 'orocrm_call_create',);
            }

            // orocrm_call_update
            if (0 === strpos($pathinfo, '/call/update') && preg_match('#^/call/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_call_update')), array (  '_controller' => 'OroCRM\\Bundle\\CallBundle\\Controller\\CallController::updateAction',));
            }

            // orocrm_call_index
            if (rtrim($pathinfo, '/') === '/call') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'orocrm_call_index');
                }

                return array (  '_controller' => 'OroCRM\\Bundle\\CallBundle\\Controller\\CallController::indexAction',  '_route' => 'orocrm_call_index',);
            }

            // orocrm_call_view
            if (0 === strpos($pathinfo, '/call/view') && preg_match('#^/call/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_call_view')), array (  '_controller' => 'OroCRM\\Bundle\\CallBundle\\Controller\\CallController::viewAction',));
            }

            // orocrm_call_widget_calls
            if ($pathinfo === '/call/widget') {
                return array (  '_controller' => 'OroCRM\\Bundle\\CallBundle\\Controller\\CallController::callsAction',  '_route' => 'orocrm_call_widget_calls',);
            }

            // orocrm_call_base_widget_calls
            if ($pathinfo === '/call/base-widget') {
                return array (  '_controller' => 'OroCRM\\Bundle\\CallBundle\\Controller\\CallController::baseCallsAction',  '_route' => 'orocrm_call_base_widget_calls',);
            }

            // orocrm_call_widget_info
            if (0 === strpos($pathinfo, '/call/widget/info') && preg_match('#^/call/widget/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_call_widget_info')), array (  '_controller' => 'OroCRM\\Bundle\\CallBundle\\Controller\\CallController::infoAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_calls
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calls(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_calls;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calls')), array (  '_controller' => 'OroCRM\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_calls:

            // oro_api_get_call
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calls/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_call;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_call')), array (  '_controller' => 'OroCRM\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_call:

            // oro_api_put_call
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calls/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_call;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_call')), array (  '_controller' => 'OroCRM\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_call:

            // oro_api_post_call
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calls(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_call;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_call')), array (  '_controller' => 'OroCRM\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_call:

            // oro_api_delete_call
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calls/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_call;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_call')), array (  '_controller' => 'OroCRM\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_call:

            // oro_api_options_calls
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calls(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_calls;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_calls')), array (  '_controller' => 'OroCRM\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_calls:

            // oro_api_options_calls_auto_889
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/call(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_calls_auto_889;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_calls_auto_889')), array (  '_controller' => 'OroCRM\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_calls_auto_889:

            // oro_api_post_call_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/call(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_call_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_call_deprecated')), array (  '_controller' => 'OroCRM\\Bundle\\CallBundle\\Controller\\Api\\Rest\\CallController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_call_deprecated:

        }

        if (0 === strpos($pathinfo, '/campaign')) {
            // orocrm_campaign_index
            if (rtrim($pathinfo, '/') === '/campaign') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'orocrm_campaign_index');
                }

                return array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\CampaignController::indexAction',  '_route' => 'orocrm_campaign_index',);
            }

            // orocrm_campaign_create
            if ($pathinfo === '/campaign/create') {
                return array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\CampaignController::createAction',  '_route' => 'orocrm_campaign_create',);
            }

            // orocrm_campaign_update
            if (0 === strpos($pathinfo, '/campaign/update') && preg_match('#^/campaign/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_campaign_update')), array (  'id' => 0,  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\CampaignController::updateAction',));
            }

            // orocrm_campaign_view
            if (0 === strpos($pathinfo, '/campaign/view') && preg_match('#^/campaign/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_campaign_view')), array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\CampaignController::viewAction',));
            }

            if (0 === strpos($pathinfo, '/campaign/e')) {
                // orocrm_campaign_event_plot
                if (0 === strpos($pathinfo, '/campaign/event/plot') && preg_match('#^/campaign/event/plot/(?P<period>[^/]++)/(?P<campaign>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_campaign_event_plot')), array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\CampaignEventController::plotAction',));
                }

                if (0 === strpos($pathinfo, '/campaign/email')) {
                    // orocrm_email_campaign_index
                    if (rtrim($pathinfo, '/') === '/campaign/email') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'orocrm_email_campaign_index');
                        }

                        return array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\EmailCampaignController::indexAction',  '_route' => 'orocrm_email_campaign_index',);
                    }

                    // orocrm_email_campaign_create
                    if ($pathinfo === '/campaign/email/create') {
                        return array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\EmailCampaignController::createAction',  '_route' => 'orocrm_email_campaign_create',);
                    }

                    // orocrm_email_campaign_update
                    if (0 === strpos($pathinfo, '/campaign/email/update') && preg_match('#^/campaign/email/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_email_campaign_update')), array (  'id' => 0,  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\EmailCampaignController::updateAction',));
                    }

                    // orocrm_email_campaign_view
                    if (0 === strpos($pathinfo, '/campaign/email/view') && preg_match('#^/campaign/email/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_email_campaign_view')), array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\EmailCampaignController::viewAction',));
                    }

                    // orocrm_email_campaign_send
                    if (0 === strpos($pathinfo, '/campaign/email/send') && preg_match('#^/campaign/email/send/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_email_campaign_send')), array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\EmailCampaignController::sendAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/dashboard/campaign_')) {
            // orocrm_campaign_dashboard_campaigns_leads_chart
            if (0 === strpos($pathinfo, '/dashboard/campaign_lead/chart') && preg_match('#^/dashboard/campaign_lead/chart/(?P<widget>[\\w-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_campaign_dashboard_campaigns_leads_chart')), array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\Dashboard\\DashboardController::campaignLeadsAction',));
            }

            // orocrm_campaign_dashboard_campaigns_opportunity_chart
            if (0 === strpos($pathinfo, '/dashboard/campaign_opportunity/chart') && preg_match('#^/dashboard/campaign_opportunity/chart/(?P<widget>[\\w-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_campaign_dashboard_campaigns_opportunity_chart')), array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\Dashboard\\DashboardController::campaignOpportunityAction',));
            }

            // orocrm_campaign_dashboard_campaigns_by_close_revenue_chart
            if (0 === strpos($pathinfo, '/dashboard/campaign_by_close_revenue/chart') && preg_match('#^/dashboard/campaign_by_close_revenue/chart/(?P<widget>[\\w-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_campaign_dashboard_campaigns_by_close_revenue_chart')), array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\Dashboard\\DashboardController::campaignByCloseRevenueAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_delete_campaign
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/campaigns/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_campaign;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_campaign')), array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\Api\\Rest\\CampaignController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_campaign:

            // oro_api_options_campaigns
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/campaigns(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_campaigns;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_campaigns')), array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\Api\\Rest\\CampaignController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_campaigns:

            // oro_api_options_campaigns_auto_890
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/campaign(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_campaigns_auto_890;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_campaigns_auto_890')), array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\Api\\Rest\\CampaignController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_campaigns_auto_890:

            // oro_api_delete_emailcampaign
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailcampaigns/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_emailcampaign;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_emailcampaign')), array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\Api\\Rest\\EmailCampaignController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_emailcampaign:

            // oro_api_options_emailcampaigns
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailcampaigns(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_emailcampaigns;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailcampaigns')), array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\Api\\Rest\\EmailCampaignController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_emailcampaigns:

            // oro_api_options_emailcampaigns_auto_891
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailcampaign(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_emailcampaigns_auto_891;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_emailcampaigns_auto_891')), array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\Api\\Rest\\EmailCampaignController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_emailcampaigns_auto_891:

            // orocrm_api_get_emailcampaign_email_templates
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailcampaigns/(?P<id>[^/]++)/email/templates(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orocrm_api_get_emailcampaign_email_templates;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_get_emailcampaign_email_templates')), array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\Api\\Rest\\EmailTemplateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_get_emailcampaign_email_templates:

            // orocrm_api_options_emailcampaign_email_templates
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailcampaign/email/templates(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_orocrm_api_options_emailcampaign_email_templates;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_options_emailcampaign_email_templates')), array (  '_controller' => 'OroCRM\\Bundle\\CampaignBundle\\Controller\\Api\\Rest\\EmailTemplateController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_options_emailcampaign_email_templates:

        }

        if (0 === strpos($pathinfo, '/channel')) {
            // 
            if ($pathinfo === '/channel/customers/search') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_;
                }

                return array (  '_controller' => 'OroCRM\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\CustomerSearchController::cgetAction',  '_route' => '',);
            }
            not_:

            // orocrm_channel_index
            if (preg_match('#^/channel(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_channel_index')), array (  '_format' => 'html',  '_controller' => 'OroCRM\\Bundle\\ChannelBundle\\Controller\\ChannelController::indexAction',));
            }

            // orocrm_channel_create
            if ($pathinfo === '/channel/create') {
                return array (  '_controller' => 'OroCRM\\Bundle\\ChannelBundle\\Controller\\ChannelController::createAction',  '_route' => 'orocrm_channel_create',);
            }

            // orocrm_channel_update
            if (0 === strpos($pathinfo, '/channel/update') && preg_match('#^/channel/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_channel_update')), array (  '_controller' => 'OroCRM\\Bundle\\ChannelBundle\\Controller\\ChannelController::updateAction',));
            }

            // orocrm_channel_change_status
            if (0 === strpos($pathinfo, '/channel/status/change') && preg_match('#^/channel/status/change/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_channel_change_status')), array (  '_controller' => 'OroCRM\\Bundle\\ChannelBundle\\Controller\\ChannelController::changeStatusAction',));
            }

            // orocrm_channel_view
            if (0 === strpos($pathinfo, '/channel/view') && preg_match('#^/channel/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_channel_view')), array (  '_controller' => 'OroCRM\\Bundle\\ChannelBundle\\Controller\\ChannelController::viewAction',));
            }

            // orocrm_channel_widget_info
            if (0 === strpos($pathinfo, '/channel/widget/info') && preg_match('#^/channel/widget/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_channel_widget_info')), array (  '_controller' => 'OroCRM\\Bundle\\ChannelBundle\\Controller\\ChannelController::infoAction',));
            }

            if (0 === strpos($pathinfo, '/channel/integration')) {
                // orocrm_channel_integration_create
                if (0 === strpos($pathinfo, '/channel/integration/create') && preg_match('#^/channel/integration/create/(?P<type>\\w+)(?:/(?P<channelName>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_channel_integration_create')), array (  'channelName' => NULL,  '_controller' => 'OroCRM\\Bundle\\ChannelBundle\\Controller\\ChannelIntegrationController::createAction',));
                }

                // orocrm_channel_integration_update
                if (0 === strpos($pathinfo, '/channel/integration/update') && preg_match('#^/channel/integration/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_channel_integration_update')), array (  '_controller' => 'OroCRM\\Bundle\\ChannelBundle\\Controller\\ChannelIntegrationController::updateAction',));
                }

            }

            // orocrm_channel_dashboard_average_lifetime_sales_chart
            if (0 === strpos($pathinfo, '/channel/dashboard/chart') && preg_match('#^/channel/dashboard/chart/(?P<widget>[\\w_-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_channel_dashboard_average_lifetime_sales_chart')), array (  '_controller' => 'OroCRM\\Bundle\\ChannelBundle\\Controller\\Dashboard\\DashboardController::averageLifetimeSalesAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // orocrm_api_get_channels
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/channels(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orocrm_api_get_channels;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_get_channels')), array (  '_controller' => 'OroCRM\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\ChannelController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_get_channels:

            // orocrm_api_delete_channel
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/channels/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_orocrm_api_delete_channel;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_delete_channel')), array (  '_controller' => 'OroCRM\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\ChannelController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_delete_channel:

            // orocrm_api_options_channels
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/channels(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_orocrm_api_options_channels;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_options_channels')), array (  '_controller' => 'OroCRM\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\ChannelController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_options_channels:

            // orocrm_api_options_channels_auto_892
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/channel(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_orocrm_api_options_channels_auto_892;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_options_channels_auto_892')), array (  '_controller' => 'OroCRM\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\ChannelController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_options_channels_auto_892:

            // oro_api_get_search_customers
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/customers/search(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_search_customers;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_search_customers')), array (  '_controller' => 'OroCRM\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\CustomerSearchController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_search_customers:

            // oro_api_options_search_customers
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/search/customers(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_search_customers;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_search_customers')), array (  '_controller' => 'OroCRM\\Bundle\\ChannelBundle\\Controller\\Api\\Rest\\CustomerSearchController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_search_customers:

        }

        if (0 === strpos($pathinfo, '/task')) {
            // orocrm_task_index
            if (preg_match('#^/task(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_task_index')), array (  '_format' => 'html',  '_controller' => 'OroCRM\\Bundle\\TaskBundle\\Controller\\TaskController::indexAction',));
            }

            // orocrm_task_widget_sidebar_tasks
            if (0 === strpos($pathinfo, '/task/widget/sidebar-tasks') && preg_match('#^/task/widget/sidebar\\-tasks(?:/(?P<perPage>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_task_widget_sidebar_tasks')), array (  'perPage' => 10,  '_controller' => 'OroCRM\\Bundle\\TaskBundle\\Controller\\TaskController::tasksWidgetAction',));
            }

            // orocrm_task_create
            if ($pathinfo === '/task/create') {
                return array (  '_controller' => 'OroCRM\\Bundle\\TaskBundle\\Controller\\TaskController::createAction',  '_route' => 'orocrm_task_create',);
            }

            // orocrm_task_view
            if (0 === strpos($pathinfo, '/task/view') && preg_match('#^/task/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_task_view')), array (  '_controller' => 'OroCRM\\Bundle\\TaskBundle\\Controller\\TaskController::viewAction',));
            }

            // orocrm_task_activity_view
            if (0 === strpos($pathinfo, '/task/activity/view') && preg_match('#^/task/activity/view/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_task_activity_view')), array (  '_controller' => 'OroCRM\\Bundle\\TaskBundle\\Controller\\TaskController::activityAction',));
            }

            // orocrm_task_update
            if (0 === strpos($pathinfo, '/task/update') && preg_match('#^/task/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_task_update')), array (  '_controller' => 'OroCRM\\Bundle\\TaskBundle\\Controller\\TaskController::updateAction',));
            }

            // orocrm_task_widget_info
            if (0 === strpos($pathinfo, '/task/widget/info') && preg_match('#^/task/widget/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_task_widget_info')), array (  '_controller' => 'OroCRM\\Bundle\\TaskBundle\\Controller\\TaskController::infoAction',));
            }

            // orocrm_task_user_tasks
            if (0 === strpos($pathinfo, '/task/user') && preg_match('#^/task/user/(?P<userId>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_task_user_tasks')), array (  '_controller' => 'OroCRM\\Bundle\\TaskBundle\\Controller\\TaskController::userTasksAction',));
            }

            // orocrm_task_my_tasks
            if ($pathinfo === '/task/my') {
                return array (  '_controller' => 'OroCRM\\Bundle\\TaskBundle\\Controller\\TaskController::myTasksAction',  '_route' => 'orocrm_task_my_tasks',);
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // orocrm_api_get_tasks
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/tasks(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orocrm_api_get_tasks;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_get_tasks')), array (  '_controller' => 'OroCRM\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_get_tasks:

            // orocrm_api_get_task
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/tasks/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orocrm_api_get_task;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_get_task')), array (  '_controller' => 'OroCRM\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_get_task:

            // orocrm_api_put_task
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/tasks/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_orocrm_api_put_task;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_put_task')), array (  '_controller' => 'OroCRM\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_put_task:

            // orocrm_api_post_task
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/tasks(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_orocrm_api_post_task;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_post_task')), array (  '_controller' => 'OroCRM\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_post_task:

            // orocrm_api_delete_task
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/tasks/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_orocrm_api_delete_task;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_delete_task')), array (  '_controller' => 'OroCRM\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_delete_task:

            // orocrm_api_options_tasks
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/tasks(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_orocrm_api_options_tasks;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_options_tasks')), array (  '_controller' => 'OroCRM\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_options_tasks:

            // orocrm_api_options_tasks_auto_893
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/task(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_orocrm_api_options_tasks_auto_893;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_options_tasks_auto_893')), array (  '_controller' => 'OroCRM\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_options_tasks_auto_893:

            // orocrm_api_post_task_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/task(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_orocrm_api_post_task_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_api_post_task_deprecated')), array (  '_controller' => 'OroCRM\\Bundle\\TaskBundle\\Controller\\Api\\Rest\\TaskController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_api_post_task_deprecated:

        }

        if (0 === strpos($pathinfo, '/b2bcustomer')) {
            // orocrm_sales_b2bcustomer_index
            if (preg_match('#^/b2bcustomer(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_b2bcustomer_index')), array (  '_format' => 'html',  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::indexAction',));
            }

            // orocrm_sales_b2bcustomer_view
            if (0 === strpos($pathinfo, '/b2bcustomer/view') && preg_match('#^/b2bcustomer/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_b2bcustomer_view')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::viewAction',));
            }

            if (0 === strpos($pathinfo, '/b2bcustomer/widget')) {
                // orocrm_sales_b2bcustomer_widget_info
                if (0 === strpos($pathinfo, '/b2bcustomer/widget/info') && preg_match('#^/b2bcustomer/widget/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_b2bcustomer_widget_info')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::infoAction',));
                }

                // orocrm_sales_b2bcustomer_widget_leads
                if (0 === strpos($pathinfo, '/b2bcustomer/widget/b2bcustomer-leads') && preg_match('#^/b2bcustomer/widget/b2bcustomer\\-leads/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_b2bcustomer_widget_leads')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::b2bCustomerLeadsAction',));
                }

            }

            // orocrm_sales_b2bcustomer_create
            if ($pathinfo === '/b2bcustomer/create') {
                return array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::createAction',  '_route' => 'orocrm_sales_b2bcustomer_create',);
            }

            // orocrm_sales_b2bcustomer_update
            if (0 === strpos($pathinfo, '/b2bcustomer/update') && preg_match('#^/b2bcustomer/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_b2bcustomer_update')), array (  'id' => 0,  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::updateAction',));
            }

            if (0 === strpos($pathinfo, '/b2bcustomer/widget/b2bcustomer')) {
                // orocrm_sales_b2bcustomer_widget_opportunities
                if (0 === strpos($pathinfo, '/b2bcustomer/widget/b2bcustomer-opportunities') && preg_match('#^/b2bcustomer/widget/b2bcustomer\\-opportunities/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_b2bcustomer_widget_opportunities')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::b2bCustomerOpportunitiesAction',));
                }

                // orocrm_sales_widget_account_b2bcustomers_info
                if (0 === strpos($pathinfo, '/b2bcustomer/widget/b2bcustomers-info/account') && preg_match('#^/b2bcustomer/widget/b2bcustomers\\-info/account/(?P<accountId>\\d+)/channel/(?P<channelId>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_widget_account_b2bcustomers_info')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::accountCustomersInfoAction',));
                }

                // orocrm_sales_widget_b2bcustomer_info
                if (0 === strpos($pathinfo, '/b2bcustomer/widget/b2bcustomer-info') && preg_match('#^/b2bcustomer/widget/b2bcustomer\\-info/(?P<id>\\d+)/channel/(?P<channelId>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_widget_b2bcustomer_info')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\B2bCustomerController::customerInfoAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/lead')) {
            // orocrm_sales_lead_view
            if (0 === strpos($pathinfo, '/lead/view') && preg_match('#^/lead/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_lead_view')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\LeadController::viewAction',));
            }

            // orocrm_sales_lead_info
            if (0 === strpos($pathinfo, '/lead/info') && preg_match('#^/lead/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_lead_info')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\LeadController::infoAction',));
            }

            // orocrm_sales_lead_address_book
            if (0 === strpos($pathinfo, '/lead/address-book') && preg_match('#^/lead/address\\-book/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_lead_address_book')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\LeadController::addressBookAction',));
            }

            // orocrm_sales_lead_create
            if ($pathinfo === '/lead/create') {
                return array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\LeadController::createAction',  '_route' => 'orocrm_sales_lead_create',);
            }

            // orocrm_sales_lead_update
            if (0 === strpos($pathinfo, '/lead/update') && preg_match('#^/lead/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_lead_update')), array (  'id' => 0,  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\LeadController::updateAction',));
            }

            // orocrm_sales_lead_index
            if (preg_match('#^/lead(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_lead_index')), array (  '_format' => 'html',  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\LeadController::indexAction',));
            }

            // orocrm_sales_widget_account_leads
            if (0 === strpos($pathinfo, '/lead/widget/account-leads') && preg_match('#^/lead/widget/account\\-leads/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_widget_account_leads')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\LeadController::accountLeadsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/opportunity')) {
            // orocrm_sales_opportunity_view
            if (0 === strpos($pathinfo, '/opportunity/view') && preg_match('#^/opportunity/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_opportunity_view')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\OpportunityController::viewAction',));
            }

            // orocrm_sales_opportunity_info
            if (0 === strpos($pathinfo, '/opportunity/info') && preg_match('#^/opportunity/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_opportunity_info')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\OpportunityController::infoAction',));
            }

            // orocrm_sales_opportunity_create
            if ($pathinfo === '/opportunity/create') {
                return array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\OpportunityController::createAction',  '_route' => 'orocrm_sales_opportunity_create',);
            }

            // orocrm_sales_opportunity_update
            if (0 === strpos($pathinfo, '/opportunity/update') && preg_match('#^/opportunity/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_opportunity_update')), array (  'id' => 0,  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\OpportunityController::updateAction',));
            }

            // orocrm_sales_opportunity_index
            if (preg_match('#^/opportunity(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_opportunity_index')), array (  '_format' => 'html',  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\OpportunityController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/salesfunnel')) {
            // orocrm_sales_salesfunnel_index
            if (preg_match('#^/salesfunnel(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_salesfunnel_index')), array (  '_format' => 'html',  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\SalesFunnelController::indexAction',));
            }

            // orocrm_sales_salesfunnel_view
            if (0 === strpos($pathinfo, '/salesfunnel/view') && preg_match('#^/salesfunnel/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_salesfunnel_view')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\SalesFunnelController::viewAction',));
            }

            // orocrm_sales_salesfunnel_info
            if (0 === strpos($pathinfo, '/salesfunnel/info') && preg_match('#^/salesfunnel/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_salesfunnel_info')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\SalesFunnelController::infoAction',));
            }

            // orocrm_sales_salesfunnel_create
            if ($pathinfo === '/salesfunnel/create') {
                return array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\SalesFunnelController::createAction',  '_route' => 'orocrm_sales_salesfunnel_create',);
            }

            // orocrm_sales_salesfunnel_update
            if (0 === strpos($pathinfo, '/salesfunnel/update') && preg_match('#^/salesfunnel/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_salesfunnel_update')), array (  'id' => 0,  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\SalesFunnelController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/dashboard')) {
            if (0 === strpos($pathinfo, '/dashboard/opportunit')) {
                // orocrm_sales_dashboard_opportunities_by_lead_source_chart
                if (0 === strpos($pathinfo, '/dashboard/opportunities_by_lead_source/chart') && preg_match('#^/dashboard/opportunities_by_lead_source/chart/(?P<widget>[\\w-]+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_dashboard_opportunities_by_lead_source_chart')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Dashboard\\DashboardController::opportunitiesByLeadSourceAction',));
                }

                // orocrm_sales_dashboard_opportunity_by_state_chart
                if (0 === strpos($pathinfo, '/dashboard/opportunity_state/chart') && preg_match('#^/dashboard/opportunity_state/chart/(?P<widget>[\\w-]+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_dashboard_opportunity_by_state_chart')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Dashboard\\DashboardController::opportunityByStatusAction',));
                }

            }

            // orocrm_sales_dashboard_sales_flow_b2b_chart
            if (0 === strpos($pathinfo, '/dashboard/sales_flow_b2b/chart') && preg_match('#^/dashboard/sales_flow_b2b/chart/(?P<widget>[\\w_-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_sales_dashboard_sales_flow_b2b_chart')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Dashboard\\DashboardController::mySalesFlowB2BAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_opportunities
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/opportunities(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_opportunities;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_opportunities')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_opportunities:

            // oro_api_get_opportunity
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/opportunities/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_opportunity;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_opportunity')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_opportunity:

            // oro_api_put_opportunity
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/opportunities/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_opportunity;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_opportunity')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_opportunity:

            // oro_api_post_opportunity
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/opportunities(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_opportunity;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_opportunity')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_opportunity:

            // oro_api_delete_opportunity
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/opportunities/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_opportunity;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_opportunity')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_opportunity:

            // oro_api_options_opportunities
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/opportunities(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_opportunities;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_opportunities')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_opportunities:

            // oro_api_options_opportunities_auto_894
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/opportunity(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_opportunities_auto_894;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_opportunities_auto_894')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_opportunities_auto_894:

            // oro_api_get_lead_address
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/leads/(?P<leadId>[^/]++)/address(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_lead_address;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_lead_address')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::getAddressAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_lead_address:

            // oro_api_get_leads
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/leads(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_leads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_leads')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_leads:

            // oro_api_get_lead
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/leads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_lead;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_lead')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_lead:

            // oro_api_put_lead
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/leads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_lead;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_lead')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_lead:

            // oro_api_post_lead
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/leads(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_lead;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_lead')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_lead:

            // oro_api_delete_lead
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/leads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_lead;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_lead')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_lead:

            // oro_api_options_leads
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/leads(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_leads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_leads')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_leads:

            // oro_api_options_leads_auto_895
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/lead(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_leads_auto_895;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_leads_auto_895')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_leads_auto_895:

            // oro_api_get_salesfunnels
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/salesfunnels(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_salesfunnels;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_salesfunnels')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_salesfunnels:

            // oro_api_get_salesfunnel
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/salesfunnels/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_salesfunnel;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_salesfunnel')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_salesfunnel:

            // oro_api_put_salesfunnel
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/salesfunnels/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_salesfunnel;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_salesfunnel')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_salesfunnel:

            // oro_api_post_salesfunnel
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/salesfunnels(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_salesfunnel;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_salesfunnel')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_salesfunnel:

            // oro_api_delete_salesfunnel
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/salesfunnels/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_salesfunnel;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_salesfunnel')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_salesfunnel:

            // oro_api_options_salesfunnels
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/salesfunnels(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_salesfunnels;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_salesfunnels')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_salesfunnels:

            // oro_api_options_salesfunnels_auto_896
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/salesfunnel(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_salesfunnels_auto_896;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_salesfunnels_auto_896')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_salesfunnels_auto_896:

            // oro_api_get_b2bcustomers
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/b2bcustomers(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_b2bcustomers;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_b2bcustomers')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_b2bcustomers:

            // oro_api_get_b2bcustomer
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/b2bcustomers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_b2bcustomer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_b2bcustomer')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_b2bcustomer:

            // oro_api_put_b2bcustomer
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/b2bcustomers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_b2bcustomer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_b2bcustomer')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_b2bcustomer:

            // oro_api_post_b2bcustomer
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/b2bcustomers(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_b2bcustomer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_b2bcustomer')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_b2bcustomer:

            // oro_api_delete_b2bcustomer
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/b2bcustomers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_b2bcustomer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_b2bcustomer')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_b2bcustomer:

            // oro_api_options_b2bcustomers
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/b2bcustomers(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_b2bcustomers;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_b2bcustomers')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_b2bcustomers:

            // oro_api_options_b2bcustomers_auto_897
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/b2bcustomer(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_b2bcustomers_auto_897;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_b2bcustomers_auto_897')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\B2bCustomerController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_b2bcustomers_auto_897:

            // oro_api_post_salesfunnel_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/salesfunnel(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_salesfunnel_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_salesfunnel_deprecated')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\SalesFunnelController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_salesfunnel_deprecated:

            // oro_api_post_lead_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/lead(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_lead_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_lead_deprecated')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\LeadController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_lead_deprecated:

            // oro_api_post_opportunity_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/opportunity(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_opportunity_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_opportunity_deprecated')), array (  '_controller' => 'OroCRM\\Bundle\\SalesBundle\\Controller\\Api\\Rest\\OpportunityController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_opportunity_deprecated:

        }

        if (0 === strpos($pathinfo, '/contact-us')) {
            // orocrm_contactus_request_view
            if (0 === strpos($pathinfo, '/contact-us/view') && preg_match('#^/contact\\-us/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_contactus_request_view')), array (  '_controller' => 'OroCRM\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::viewAction',));
            }

            // orocrm_contactus_request_index
            if (rtrim($pathinfo, '/') === '/contact-us') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'orocrm_contactus_request_index');
                }

                return array (  '_controller' => 'OroCRM\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::indexAction',  '_route' => 'orocrm_contactus_request_index',);
            }

            // orocrm_contactus_request_info
            if (0 === strpos($pathinfo, '/contact-us/info') && preg_match('#^/contact\\-us/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_contactus_request_info')), array (  '_controller' => 'OroCRM\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::infoAction',));
            }

            // orocrm_contactus_request_update
            if (0 === strpos($pathinfo, '/contact-us/update') && preg_match('#^/contact\\-us/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_contactus_request_update')), array (  '_controller' => 'OroCRM\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::updateAction',));
            }

            // orocrm_contactus_request_create
            if ($pathinfo === '/contact-us/create') {
                return array (  '_controller' => 'OroCRM\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::createAction',  '_route' => 'orocrm_contactus_request_create',);
            }

            // orocrm_contactus_request_delete
            if (0 === strpos($pathinfo, '/contact-us/delete') && preg_match('#^/contact\\-us/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_contactus_request_delete')), array (  '_controller' => 'OroCRM\\Bundle\\ContactUsBundle\\Controller\\ContactRequestController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/magento')) {
            if (0 === strpos($pathinfo, '/magento/c')) {
                if (0 === strpos($pathinfo, '/magento/cart')) {
                    // orocrm_magento_cart_index
                    if (rtrim($pathinfo, '/') === '/magento/cart') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'orocrm_magento_cart_index');
                        }

                        return array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\CartController::indexAction',  '_route' => 'orocrm_magento_cart_index',);
                    }

                    // orocrm_magento_cart_view
                    if (0 === strpos($pathinfo, '/magento/cart/view') && preg_match('#^/magento/cart/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_cart_view')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\CartController::viewAction',));
                    }

                    // orocrm_magento_cart_widget_info
                    if (0 === strpos($pathinfo, '/magento/cart/info') && preg_match('#^/magento/cart/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_cart_widget_info')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\CartController::infoAction',));
                    }

                    if (0 === strpos($pathinfo, '/magento/cart/widget')) {
                        // orocrm_magento_cart_widget_items
                        if (0 === strpos($pathinfo, '/magento/cart/widget/grid') && preg_match('#^/magento/cart/widget/grid/(?P<id>\\d+)(?:/(?P<isRemoved>\\d+))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_cart_widget_items')), array (  'isRemoved' => false,  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\CartController::itemsAction',));
                        }

                        // orocrm_magento_widget_customer_carts
                        if (0 === strpos($pathinfo, '/magento/cart/widget/account_cart') && preg_match('#^/magento/cart/widget/account_cart/(?P<customerId>\\d+)/(?P<channelId>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_widget_customer_carts')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\CartController::customerCartsAction',));
                        }

                        // orocrm_magento_customer_carts_widget
                        if (0 === strpos($pathinfo, '/magento/cart/widget/customer_cart') && preg_match('#^/magento/cart/widget/customer_cart/(?P<customerId>\\d+)/(?P<channelId>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_customer_carts_widget')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\CartController::customerCartsWidgetAction',));
                        }

                    }

                    // orocrm_magento_cart_actualize
                    if (0 === strpos($pathinfo, '/magento/cart/actualize') && preg_match('#^/magento/cart/actualize/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_cart_actualize')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\CartController::actualizeAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/magento/customer')) {
                    // orocrm_magento_customer_index
                    if (rtrim($pathinfo, '/') === '/magento/customer') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'orocrm_magento_customer_index');
                        }

                        return array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\CustomerController::indexAction',  '_route' => 'orocrm_magento_customer_index',);
                    }

                    // orocrm_magento_customer_view
                    if (0 === strpos($pathinfo, '/magento/customer/view') && preg_match('#^/magento/customer/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_customer_view')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\CustomerController::viewAction',));
                    }

                    // orocrm_magento_customer_update
                    if (0 === strpos($pathinfo, '/magento/customer/update') && preg_match('#^/magento/customer/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_customer_update')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\CustomerController::updateAction',));
                    }

                    // orocrm_magento_customer_create
                    if ($pathinfo === '/magento/customer/create') {
                        return array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\CustomerController::createAction',  '_route' => 'orocrm_magento_customer_create',);
                    }

                    // orocrm_magento_customer_register
                    if (0 === strpos($pathinfo, '/magento/customer/register') && preg_match('#^/magento/customer/register/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_customer_register')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\CustomerController::registerAction',));
                    }

                    // orocrm_magento_customer_info
                    if (0 === strpos($pathinfo, '/magento/customer/info') && preg_match('#^/magento/customer/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_customer_info')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\CustomerController::infoAction',));
                    }

                    if (0 === strpos($pathinfo, '/magento/customer/widget/customer')) {
                        // orocrm_magento_widget_account_customers_info
                        if (0 === strpos($pathinfo, '/magento/customer/widget/customers-info') && preg_match('#^/magento/customer/widget/customers\\-info/(?P<accountId>\\d+)/(?P<channelId>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_widget_account_customers_info')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\CustomerController::accountCustomersInfoAction',));
                        }

                        // orocrm_magento_widget_customer_info
                        if (0 === strpos($pathinfo, '/magento/customer/widget/customer-info') && preg_match('#^/magento/customer/widget/customer\\-info/(?P<id>\\d+)/(?P<channelId>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_widget_customer_info')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\CustomerController::customerInfoAction',));
                        }

                    }

                    // orocrm_magento_customer_orderplace
                    if (0 === strpos($pathinfo, '/magento/customer/order') && preg_match('#^/magento/customer/order/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_customer_orderplace')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\CustomerController::placeOrderAction',));
                    }

                    // orocrm_magento_customer_address_book
                    if (0 === strpos($pathinfo, '/magento/customer/addressBook') && preg_match('#^/magento/customer/addressBook/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_customer_address_book')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\CustomerController::addressBookAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/magento/newsletter-subscriber')) {
                // orocrm_magento_newsletter_subscriber_index
                if (rtrim($pathinfo, '/') === '/magento/newsletter-subscriber') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'orocrm_magento_newsletter_subscriber_index');
                    }

                    return array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\NewsletterSubscriberController::indexAction',  '_route' => 'orocrm_magento_newsletter_subscriber_index',);
                }

                // orocrm_magento_newsletter_subscriber_view
                if (0 === strpos($pathinfo, '/magento/newsletter-subscriber/view') && preg_match('#^/magento/newsletter\\-subscriber/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_newsletter_subscriber_view')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\NewsletterSubscriberController::viewAction',));
                }

                // orocrm_magento_newsletter_subscriber_info
                if (0 === strpos($pathinfo, '/magento/newsletter-subscriber/info') && preg_match('#^/magento/newsletter\\-subscriber/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_newsletter_subscriber_info')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\NewsletterSubscriberController::infoAction',));
                }

                // orocrm_magento_newsletter_subscriber_subscribe
                if (0 === strpos($pathinfo, '/magento/newsletter-subscriber/subscribe') && preg_match('#^/magento/newsletter\\-subscriber/subscribe/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_newsletter_subscriber_subscribe')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\NewsletterSubscriberController::subscribeAction',));
                }

                // orocrm_magento_newsletter_subscriber_unsubscribe
                if (0 === strpos($pathinfo, '/magento/newsletter-subscriber/unsubscribe') && preg_match('#^/magento/newsletter\\-subscriber/unsubscribe/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_newsletter_subscriber_unsubscribe')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\NewsletterSubscriberController::unsubscribeAction',));
                }

                // orocrm_magento_newsletter_subscriber_subscribe_customer
                if (0 === strpos($pathinfo, '/magento/newsletter-subscriber/subscribe/customer') && preg_match('#^/magento/newsletter\\-subscriber/subscribe/customer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_newsletter_subscriber_subscribe_customer')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\NewsletterSubscriberController::subscribeByCustomerAction',));
                }

                // orocrm_magento_newsletter_subscriber_unsubscribe_customer
                if (0 === strpos($pathinfo, '/magento/newsletter-subscriber/unsubscribe/customer') && preg_match('#^/magento/newsletter\\-subscriber/unsubscribe/customer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_newsletter_subscriber_unsubscribe_customer')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\NewsletterSubscriberController::unsubscribeByCustomerAction',));
                }

            }

            if (0 === strpos($pathinfo, '/magento/order')) {
                // orocrm_magento_order_index
                if (rtrim($pathinfo, '/') === '/magento/order') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'orocrm_magento_order_index');
                    }

                    return array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\OrderController::indexAction',  '_route' => 'orocrm_magento_order_index',);
                }

                // orocrm_magento_order_view
                if (0 === strpos($pathinfo, '/magento/order/view') && preg_match('#^/magento/order/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_order_view')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\OrderController::viewAction',));
                }

                // orocrm_magento_order_widget_info
                if (0 === strpos($pathinfo, '/magento/order/info') && preg_match('#^/magento/order/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_order_widget_info')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\OrderController::infoAction',));
                }

                // orocrm_magento_order_widget_items
                if (0 === strpos($pathinfo, '/magento/order/widget/grid') && preg_match('#^/magento/order/widget/grid/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_order_widget_items')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\OrderController::itemsAction',));
                }

                // orocrm_magento_widget_customer_orders
                if (0 === strpos($pathinfo, '/magento/order/account-widget/customer-orders') && preg_match('#^/magento/order/account\\-widget/customer\\-orders/(?P<customerId>\\d+)/(?P<channelId>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_widget_customer_orders')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\OrderController::customerOrdersAction',));
                }

                // orocrm_magento_customer_orders_widget
                if (0 === strpos($pathinfo, '/magento/order/customer-widget/customer-orders') && preg_match('#^/magento/order/customer\\-widget/customer\\-orders/(?P<customerId>\\d+)/(?P<channelId>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_customer_orders_widget')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\OrderController::customerOrdersWidgetAction',));
                }

                // orocrm_magento_order_actualize
                if (0 === strpos($pathinfo, '/magento/order/actualize') && preg_match('#^/magento/order/actualize/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_order_actualize')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\OrderController::actualizeAction',));
                }

                if (0 === strpos($pathinfo, '/magento/order/place')) {
                    // orocrm_magento_orderplace_cart
                    if (0 === strpos($pathinfo, '/magento/order/place/cart') && preg_match('#^/magento/order/place/cart/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_orderplace_cart')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\OrderPlaceController::cartAction',));
                    }

                    // orocrm_magento_orderplace_new_cart_order_sync
                    if (0 === strpos($pathinfo, '/magento/order/place/sync') && preg_match('#^/magento/order/place/sync/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_orderplace_new_cart_order_sync')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\OrderPlaceController::syncAction',));
                    }

                    if (0 === strpos($pathinfo, '/magento/order/place/customer')) {
                        // orocrm_magento_widget_customer_orderplace
                        if (preg_match('#^/magento/order/place/customer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_widget_customer_orderplace')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\OrderPlaceController::customerAction',));
                        }

                        // orocrm_magento_orderplace_new_customer_order_sync
                        if (0 === strpos($pathinfo, '/magento/order/place/customer_sync') && preg_match('#^/magento/order/place/customer_sync/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_orderplace_new_customer_order_sync')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\OrderPlaceController::customerSyncAction',));
                        }

                    }

                    // orocrm_magento_orderplace_success
                    if ($pathinfo === '/magento/order/place/success') {
                        return array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\OrderPlaceController::successAction',  '_route' => 'orocrm_magento_orderplace_success',);
                    }

                    // orocrm_magento_orderplace_error
                    if ($pathinfo === '/magento/order/place/error') {
                        return array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\OrderPlaceController::errorAction',  '_route' => 'orocrm_magento_orderplace_error',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/magento/product')) {
                // orocrm_magento_product_index
                if (rtrim($pathinfo, '/') === '/magento/product') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'orocrm_magento_product_index');
                    }

                    return array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\ProductController::indexAction',  '_route' => 'orocrm_magento_product_index',);
                }

                // orocrm_magento_product_view
                if (0 === strpos($pathinfo, '/magento/product/view') && preg_match('#^/magento/product/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_product_view')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\ProductController::viewAction',));
                }

                // orocrm_magento_product_info
                if (0 === strpos($pathinfo, '/magento/product/info') && preg_match('#^/magento/product/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_product_info')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\ProductController::infoAction',));
                }

            }

            // orocrm_magento_soap_check
            if ($pathinfo === '/magento/check') {
                return array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\SoapController::checkAction',  '_route' => 'orocrm_magento_soap_check',);
            }

        }

        if (0 === strpos($pathinfo, '/dashboard')) {
            // orocrm_magento_dashboard_sales_flow_b2c_chart
            if (0 === strpos($pathinfo, '/dashboard/sales_flow_b2c/chart') && preg_match('#^/dashboard/sales_flow_b2c/chart/(?P<widget>[\\w_-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_magento_dashboard_sales_flow_b2c_chart')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Dashboard\\DashboardController::mySalesFlowB2CAction',));
            }

            // orocrm_magento_dashboard_average_order_amount
            if ($pathinfo === '/dashboard/average_order_amount_by_customer') {
                return array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Dashboard\\DashboardController::averageOrderAmountAction',  '_route' => 'orocrm_magento_dashboard_average_order_amount',);
            }

            if (0 === strpos($pathinfo, '/dashboard/orocrm_magento_dashboard_')) {
                // orocrm_magento_dashboard_new_customers_chart
                if ($pathinfo === '/dashboard/orocrm_magento_dashboard_new_customers_chart') {
                    return array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Dashboard\\DashboardController::newCustomersAction',  '_route' => 'orocrm_magento_dashboard_new_customers_chart',);
                }

                // orocrm_magento_dashboard_purchase_chart
                if ($pathinfo === '/dashboard/orocrm_magento_dashboard_purchase_chart') {
                    return array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Dashboard\\DashboardController::purchaseAction',  '_route' => 'orocrm_magento_dashboard_purchase_chart',);
                }

                // orocrm_magento_dashboard_revenue_over_time_chart
                if ($pathinfo === '/dashboard/orocrm_magento_dashboard_revenue_over_time_chart') {
                    return array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Dashboard\\DashboardController::revenueOverTimeAction',  '_route' => 'orocrm_magento_dashboard_revenue_over_time_chart',);
                }

                // orocrm_magento_dashboard_orders_over_time_chart
                if ($pathinfo === '/dashboard/orocrm_magento_dashboard_orders_over_time_chart') {
                    return array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Dashboard\\DashboardController::ordersOverTimeAction',  '_route' => 'orocrm_magento_dashboard_orders_over_time_chart',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_customer_addresses
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/customers/(?P<customerId>[^/]++)/addresses(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_customer_addresses;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_customer_addresses')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerAddressController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_customer_addresses:

            // oro_api_post_customer_address
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/customers/(?P<customerId>[^/]++)/addresses(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_customer_address;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_customer_address')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerAddressController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_customer_address:

            // oro_api_get_customer_address
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/customers/(?P<customerId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_customer_address;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_customer_address')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerAddressController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_customer_address:

            // oro_api_put_customer_address
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/customers/(?P<customerId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_customer_address;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_customer_address')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerAddressController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_customer_address:

            // oro_api_delete_customer_address
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/customers/(?P<customerId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_customer_address;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_customer_address')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerAddressController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_customer_address:

            // oro_api_options_customer_addresses
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/customer/addresses(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_customer_addresses;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_customer_addresses')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_customer_addresses:

            // oro_api_options_customer_addresses_auto_898
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/customer/address(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_customer_addresses_auto_898;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_customer_addresses_auto_898')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_customer_addresses_auto_898:

            // oro_api_get_customers
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/customers(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_customers;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_customers')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_customers:

            // oro_api_get_customer
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/customers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_customer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_customer')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_customer:

            // oro_api_post_customer
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/customers(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_customer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_customer')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_customer:

            // oro_api_put_customer
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/customers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_customer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_customer')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_customer:

            // oro_api_delete_customer
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/customers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_customer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_customer')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_customer:

            // oro_api_options_customers
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/customers(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_customers;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_customers')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_customers:

            // oro_api_options_customers_auto_899
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/customer(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_customers_auto_899;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_customers_auto_899')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CustomerController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_customers_auto_899:

            // oro_api_get_magentocustomers
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/magentocustomers(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_magentocustomers;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_magentocustomers')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\MagentoCustomerController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_magentocustomers:

            // oro_api_get_magentocustomer
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/magentocustomers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_magentocustomer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_magentocustomer')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\MagentoCustomerController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_magentocustomer:

            // oro_api_post_magentocustomer
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/magentocustomers(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_magentocustomer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_magentocustomer')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\MagentoCustomerController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_magentocustomer:

            // oro_api_put_magentocustomer
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/magentocustomers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_magentocustomer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_magentocustomer')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\MagentoCustomerController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_magentocustomer:

            // oro_api_delete_magentocustomer
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/magentocustomers/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_magentocustomer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_magentocustomer')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\MagentoCustomerController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_magentocustomer:

            // oro_api_options_magentocustomers
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/magentocustomers(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_magentocustomers;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_magentocustomers')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\MagentoCustomerController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_magentocustomers:

            // oro_api_options_magentocustomers_auto_900
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/magentocustomer(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_magentocustomers_auto_900;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_magentocustomers_auto_900')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\MagentoCustomerController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_magentocustomers_auto_900:

            // oro_api_get_orders
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/orders(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_orders;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_orders')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_orders:

            // oro_api_post_order
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/orders(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_order;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_order')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_order:

            // oro_api_get_order
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/orders/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_order;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_order')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_order:

            // oro_api_put_order
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/orders/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_order;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_order')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_order:

            // oro_api_delete_order
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/orders/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_order;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_order')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_order:

            // oro_api_options_orders
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/orders(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_orders;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_orders')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_orders:

            // oro_api_options_orders_auto_901
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/order(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_orders_auto_901;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_orders_auto_901')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_orders_auto_901:

            // oro_api_get_order_addresses
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/addresses(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_order_addresses;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_order_addresses')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderAddressController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_order_addresses:

            // oro_api_post_order_address
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/addresses(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_order_address;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_order_address')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderAddressController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_order_address:

            // oro_api_get_order_address
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_order_address;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_order_address')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderAddressController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_order_address:

            // oro_api_put_order_address
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_order_address;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_order_address')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderAddressController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_order_address:

            // oro_api_delete_order_address
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/addresses/(?P<addressId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_order_address;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_order_address')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderAddressController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_order_address:

            // oro_api_options_order_addresses
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/order/addresses(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_order_addresses;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_order_addresses')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_order_addresses:

            // oro_api_options_order_addresses_auto_902
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/order/address(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_order_addresses_auto_902;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_order_addresses_auto_902')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_order_addresses_auto_902:

            // oro_api_post_order_item
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/items(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_order_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_order_item')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_order_item:

            // oro_api_get_order_item
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/items/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_order_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_order_item')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderItemController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_order_item:

            // oro_api_get_order_items
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/items(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_order_items;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_order_items')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderItemController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_order_items:

            // oro_api_put_order_item
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/items/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_order_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_order_item')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderItemController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_order_item:

            // oro_api_delete_order_item
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/orders/(?P<orderId>[^/]++)/items/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_order_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_order_item')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderItemController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_order_item:

            // oro_api_options_order_items
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/order/items(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_order_items;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_order_items')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_order_items:

            // oro_api_options_order_items_auto_903
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/order/item(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_order_items_auto_903;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_order_items_auto_903')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\OrderItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_order_items_auto_903:

            // oro_api_get_carts
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_carts;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_carts')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_carts:

            // oro_api_post_cart
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_cart;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_cart')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_cart:

            // oro_api_get_cart
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_cart;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_cart')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_cart:

            // oro_api_put_cart
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_cart;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_cart')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_cart:

            // oro_api_delete_cart
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_cart;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_cart')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_cart:

            // oro_api_options_carts
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_carts;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_carts')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_carts:

            // oro_api_options_carts_auto_904
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/cart(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_carts_auto_904;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_carts_auto_904')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_carts_auto_904:

            // oro_api_post_cart_item
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/items(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_cart_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_cart_item')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_cart_item:

            // oro_api_get_cart_item
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/items/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_cart_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_cart_item')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartItemController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_cart_item:

            // oro_api_get_cart_items
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/items(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_cart_items;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_cart_items')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartItemController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_cart_items:

            // oro_api_put_cart_item
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/items/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_cart_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_cart_item')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartItemController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_cart_item:

            // oro_api_delete_cart_item
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/items/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_cart_item;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_cart_item')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartItemController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_cart_item:

            // oro_api_options_cart_items
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/cart/items(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_cart_items;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_cart_items')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_cart_items:

            // oro_api_options_cart_items_auto_905
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/cart/item(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_cart_items_auto_905;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_cart_items_auto_905')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartItemController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_cart_items_auto_905:

            // oro_api_post_cart_address_shipping
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/addresses/shippings(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_cart_address_shipping;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_cart_address_shipping')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::postShippingAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_cart_address_shipping:

            // oro_api_post_cart_address_billing
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/addresses/billings(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_cart_address_billing;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_cart_address_billing')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::postBillingAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_cart_address_billing:

            // oro_api_get_cart_address_shipping
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/address/shipping(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_cart_address_shipping;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_cart_address_shipping')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::getShippingAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_cart_address_shipping:

            // oro_api_get_cart_address_billing
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/address/billing(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_cart_address_billing;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_cart_address_billing')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::getBillingAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_cart_address_billing:

            // oro_api_put_cart_address_shipping
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/address/shipping(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_cart_address_shipping;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_cart_address_shipping')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::putShippingAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_cart_address_shipping:

            // oro_api_put_cart_address_billing
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/address/billing(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_cart_address_billing;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_cart_address_billing')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::putBillingAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_cart_address_billing:

            // oro_api_delete_cart_address_shipping
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/address/shipping(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_cart_address_shipping;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_cart_address_shipping')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::deleteShippingAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_cart_address_shipping:

            // oro_api_delete_cart_address_billing
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/carts/(?P<cartId>[^/]++)/address/billing(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_cart_address_billing;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_cart_address_billing')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::deleteBillingAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_cart_address_billing:

            // oro_api_options_cart_addresses
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/cart/addresses(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_cart_addresses;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_cart_addresses')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_cart_addresses:

            // oro_api_options_cart_addresses_auto_906
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/cart/address(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_oro_api_options_cart_addresses_auto_906;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_options_cart_addresses_auto_906')), array (  '_controller' => 'OroCRM\\Bundle\\MagentoBundle\\Controller\\Api\\Rest\\CartAddressController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_options_cart_addresses_auto_906:

        }

        if (0 === strpos($pathinfo, '/case')) {
            if (0 === strpos($pathinfo, '/case/case')) {
                // orocrm_case_api_rest_comment_cget
                if (preg_match('#^/case/case/(?P<id>\\d+)/comments$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_orocrm_case_api_rest_comment_cget;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_api_rest_comment_cget')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::cgetAction',));
                }
                not_orocrm_case_api_rest_comment_cget:

                // orocrm_case_api_rest_comment_post
                if (preg_match('#^/case/case/(?P<id>\\d+)/comment$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_orocrm_case_api_rest_comment_post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_api_rest_comment_post')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::postAction',));
                }
                not_orocrm_case_api_rest_comment_post:

            }

            // orocrm_case_index
            if (rtrim($pathinfo, '/') === '/case') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'orocrm_case_index');
                }

                return array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\CaseController::indexAction',  '_route' => 'orocrm_case_index',);
            }

            // orocrm_case_view
            if (0 === strpos($pathinfo, '/case/view') && preg_match('#^/case/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_view')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\CaseController::viewAction',));
            }

            if (0 === strpos($pathinfo, '/case/widget')) {
                // orocrm_case_account_widget_cases
                if (0 === strpos($pathinfo, '/case/widget/account-cases') && preg_match('#^/case/widget/account\\-cases/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_account_widget_cases')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\CaseController::accountCasesAction',));
                }

                // orocrm_case_contact_widget_cases
                if (0 === strpos($pathinfo, '/case/widget/contact-cases') && preg_match('#^/case/widget/contact\\-cases/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_contact_widget_cases')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\CaseController::contactCasesAction',));
                }

            }

            // orocrm_case_create
            if ($pathinfo === '/case/create') {
                return array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\CaseController::createAction',  '_route' => 'orocrm_case_create',);
            }

            // orocrm_case_update
            if (0 === strpos($pathinfo, '/case/update') && preg_match('#^/case/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_update')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\CaseController::updateAction',));
            }

            // orocrm_case_comment_list
            if (preg_match('#^/case/(?P<id>\\d+)/comment/list(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_comment_list')), array (  '_format' => 'json',  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\CommentController::commentsListAction',));
            }

            // orocrm_case_widget_comments
            if (preg_match('#^/case/(?P<id>\\d+)/widget/comment$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_widget_comments')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\CommentController::commentsWidgetAction',));
            }

            // orocrm_case_comment_create
            if (preg_match('#^/case/(?P<caseId>\\d+)/comment/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_comment_create')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\CommentController::createAction',));
            }

            // orocrm_case_comment_update
            if (0 === strpos($pathinfo, '/case/comment') && preg_match('#^/case/comment/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_comment_update')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\CommentController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // orocrm_case_api_get_cases
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/cases(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orocrm_case_api_get_cases;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_api_get_cases')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_case_api_get_cases:

            // orocrm_case_api_get_case
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/cases/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orocrm_case_api_get_case;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_api_get_case')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_case_api_get_case:

            // orocrm_case_api_put_case
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/cases/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_orocrm_case_api_put_case;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_api_put_case')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_case_api_put_case:

            // orocrm_case_api_post_case
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/cases(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_orocrm_case_api_post_case;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_api_post_case')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_case_api_post_case:

            // orocrm_case_api_delete_case
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/cases/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_orocrm_case_api_delete_case;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_api_delete_case')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_case_api_delete_case:

            // orocrm_case_api_options_cases
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/cases(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_orocrm_case_api_options_cases;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_api_options_cases')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_case_api_options_cases:

            // orocrm_case_api_options_cases_auto_907
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/case(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_orocrm_case_api_options_cases_auto_907;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_api_options_cases_auto_907')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_case_api_options_cases_auto_907:

            // orocrm_case_api_get_comments
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/case/(?P<id>\\d+)/comments(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orocrm_case_api_get_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_api_get_comments')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_case_api_get_comments:

            // orocrm_case_api_get_comment
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/case/comments/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orocrm_case_api_get_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_api_get_comment')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_case_api_get_comment:

            // orocrm_case_api_put_comment
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/case/comments/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_orocrm_case_api_put_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_api_put_comment')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_case_api_put_comment:

            // orocrm_case_api_post_comment
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/case/(?P<id>\\d+)/comment(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_orocrm_case_api_post_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_api_post_comment')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_case_api_post_comment:

            // orocrm_case_api_delete_comment
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/case/comments/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_orocrm_case_api_delete_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_api_delete_comment')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_case_api_delete_comment:

            // orocrm_case_api_options_comments
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/case/comments(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_orocrm_case_api_options_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_api_options_comments')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CommentController::optionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_case_api_options_comments:

            // orocrm_case_api_post_case_deprecated
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/case(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_orocrm_case_api_post_case_deprecated;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orocrm_case_api_post_case_deprecated')), array (  '_controller' => 'OroCRM\\Bundle\\CaseBundle\\Controller\\Api\\Rest\\CaseController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_orocrm_case_api_post_case_deprecated:

        }

        // oro_translation_jstranslation
        if (0 === strpos($pathinfo, '/js/translation') && preg_match('#^/js/translation/(?P<_locale>[^/\\.]++)\\.js$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_translation_jstranslation')), array (  '_controller' => 'oro_translation.controller:indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
