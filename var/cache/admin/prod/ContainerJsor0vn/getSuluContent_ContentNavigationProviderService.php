<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_content.content_navigation_provider' shared service.

return $this->services['sulu_content.content_navigation_provider'] = new \Sulu\Bundle\ContentBundle\Admin\ContentContentNavigationProvider(${($_ = isset($this->services['sulu_security.security_checker']) ? $this->services['sulu_security.security_checker'] : $this->getSuluSecurity_SecurityCheckerService()) && false ?: '_'}, true);