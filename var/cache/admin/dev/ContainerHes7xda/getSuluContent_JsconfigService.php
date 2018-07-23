<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_content.jsconfig' shared service.

return $this->services['sulu_content.jsconfig'] = new \Sulu\Bundle\AdminBundle\Admin\JsConfig('sulu-content', array('locales' => ${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}->getAllLocalesByWebspaces(), 'versioning' => array('enabled' => false), 'default_author' => true, 'seo' => $this->parameters['sulu_content.seo']));