<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.dao.admin' shared service.

return $this->services['security.authentication.provider.dao.admin'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(${($_ = isset($this->services['sulu_security.user_provider']) ? $this->services['sulu_security.user_provider'] : $this->load('getSuluSecurity_UserProviderService.php')) && false ?: '_'}, new \Symfony\Component\Security\Core\User\UserChecker(), 'admin', ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->load('getSecurity_EncoderFactoryService.php')) && false ?: '_'}, true);
