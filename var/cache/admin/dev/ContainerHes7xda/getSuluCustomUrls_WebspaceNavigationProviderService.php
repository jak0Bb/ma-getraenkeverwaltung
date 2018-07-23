<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_custom_urls.webspace_navigation_provider' shared service.

return $this->services['sulu_custom_urls.webspace_navigation_provider'] = new \Sulu\Bundle\CustomUrlBundle\Admin\WebspaceContentNavigationProvider(${($_ = isset($this->services['sulu_security.security_checker']) ? $this->services['sulu_security.security_checker'] : $this->getSuluSecurity_SecurityCheckerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}, 'dev');