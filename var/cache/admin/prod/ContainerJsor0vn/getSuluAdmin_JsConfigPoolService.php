<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_admin.js_config_pool' shared service.

$this->services['sulu_admin.js_config_pool'] = $instance = new \Sulu\Bundle\AdminBundle\Admin\JsConfigPool();

$a = ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'};

$instance->addConfigParams(new \Sulu\Bundle\ContactBundle\Admin\JsConfigAvatarCollection(${($_ = isset($this->services['sulu_media.system_collections.manager']) ? $this->services['sulu_media.system_collections.manager'] : $this->load('getSuluMedia_SystemCollections_ManagerService.php')) && false ?: '_'}));
$instance->addConfigParams(new \Sulu\Bundle\AdminBundle\Admin\JsConfig('sulu-media', array('permissions' => ${($_ = isset($this->services['sulu_security.access_control_manager']) ? $this->services['sulu_security.access_control_manager'] : $this->load('getSuluSecurity_AccessControlManagerService.php')) && false ?: '_'}->getUserPermissions(${($_ = isset($this->services['sulu_media.security_context']) ? $this->services['sulu_media.security_context'] : $this->services['sulu_media.security_context'] = new \Sulu\Component\Security\Authorization\SecurityCondition('sulu.media.collections')) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}->getToken()->getUser()), 'maxFilesize' => 256, 'adobeCreativeKey' => NULL, 'formats' => $this->parameters['sulu_media.image.formats'])));
$instance->addConfigParams(new \Sulu\Bundle\SecurityBundle\Security\SecurityConfig('sulu_security.contexts', ${($_ = isset($this->services['sulu_security.access_control_manager']) ? $this->services['sulu_security.access_control_manager'] : $this->load('getSuluSecurity_AccessControlManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_admin.admin_pool']) ? $this->services['sulu_admin.admin_pool'] : $this->load('getSuluAdmin_AdminPoolService.php')) && false ?: '_'}, $a));
$instance->addConfigParams(new \Sulu\Bundle\AdminBundle\Admin\JsConfig('sulu-snippet', array('defaultType' => 'default')));
$instance->addConfigParams(new \Sulu\Bundle\ContentBundle\Admin\WebspaceInputTypesJsConfig(${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.resource_locator.strategy_pool']) ? $this->services['sulu.content.resource_locator.strategy_pool'] : $this->load('getSulu_Content_ResourceLocator_StrategyPoolService.php')) && false ?: '_'}));
$instance->addConfigParams(new \Sulu\Bundle\AdminBundle\Admin\JsConfig('sulu-content', array('locales' => ${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}->getAllLocalesByWebspaces(), 'versioning' => array('enabled' => false), 'default_author' => true, 'seo' => $this->parameters['sulu_content.seo'])));
$instance->addConfigParams(new \Sulu\Bundle\ContentBundle\Admin\TextEditorJsConfig($a));
$instance->addConfigParams(new \Sulu\Bundle\ContentBundle\Admin\LinkProviderJsConfig(${($_ = isset($this->services['sulu_content.link_tag.provider_pool']) ? $this->services['sulu_content.link_tag.provider_pool'] : $this->getSuluContent_LinkTag_ProviderPoolService()) && false ?: '_'}));
$instance->addConfigParams(new \Sulu\Bundle\AdminBundle\Admin\JsConfig('sulu.websocket.server', array('enabled' => false, 'port' => 587, 'httpHost' => 'imap.derprovider.at')));
$instance->addConfigParams(new \Sulu\Bundle\WebsocketBundle\Admin\AppJsConfig(${($_ = isset($this->services['sulu_websocket.manager']) ? $this->services['sulu_websocket.manager'] : $this->load('getSuluWebsocket_ManagerService.php')) && false ?: '_'}));
$instance->addConfigParams(new \Sulu\Bundle\AdminBundle\Admin\JsConfig('sulu_admin.widget_groups', array()));
$instance->addConfigParams(new \Sulu\Bundle\AdminBundle\Admin\JsConfig('sulu-collaboration', array('interval' => 300000)));
$instance->addConfigParams(new \Sulu\Bundle\AdminBundle\Admin\JsConfig('sulu_preview', array('mode' => 'auto', 'delay' => 500)));

return $instance;
