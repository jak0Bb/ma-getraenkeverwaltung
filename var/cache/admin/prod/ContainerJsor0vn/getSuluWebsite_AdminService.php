<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_website.admin' shared service.

return $this->services['sulu_website.admin'] = new \Sulu\Bundle\WebsiteBundle\Admin\WebsiteAdmin(${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_security.security_checker']) ? $this->services['sulu_security.security_checker'] : $this->getSuluSecurity_SecurityCheckerService()) && false ?: '_'}, 'Sulu');
