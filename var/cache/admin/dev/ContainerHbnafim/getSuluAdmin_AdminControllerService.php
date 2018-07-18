<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_admin.admin_controller' shared service.

return $this->services['sulu_admin.admin_controller'] = new \Sulu\Bundle\AdminBundle\Controller\AdminController(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['sulu_admin.admin_pool']) ? $this->services['sulu_admin.admin_pool'] : $this->load('getSuluAdmin_AdminPoolService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_admin.js_config_pool']) ? $this->services['sulu_admin.js_config_pool'] : $this->load('getSuluAdmin_JsConfigPoolService.php')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer']) ? $this->services['jms_serializer'] : $this->getJmsSerializerService()) && false ?: '_'}, ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->load('getTemplatingService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu.core.localization_manager']) ? $this->services['sulu.core.localization_manager'] : $this->load('getSulu_Core_LocalizationManagerService.php')) && false ?: '_'}, 'dev', 'Sulu', $this->parameters['sulu_core.locales'], '1.6.19', $this->parameters['sulu_core.translated_locales'], $this->parameters['sulu_core.translations'], 'en');
