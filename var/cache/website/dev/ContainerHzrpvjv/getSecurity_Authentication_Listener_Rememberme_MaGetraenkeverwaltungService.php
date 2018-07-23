<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.rememberme.ma_getraenkeverwaltung' shared service.

return $this->services['security.authentication.listener.rememberme.ma_getraenkeverwaltung'] = new \Symfony\Component\Security\Http\Firewall\RememberMeListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.rememberme.services.simplehash.ma_getraenkeverwaltung']) ? $this->services['security.authentication.rememberme.services.simplehash.ma_getraenkeverwaltung'] : $this->load('getSecurity_Authentication_Rememberme_Services_Simplehash_MaGetraenkeverwaltungService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, true, ${($_ = isset($this->services['security.authentication.session_strategy.ma_getraenkeverwaltung']) ? $this->services['security.authentication.session_strategy.ma_getraenkeverwaltung'] : $this->services['security.authentication.session_strategy.ma_getraenkeverwaltung'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('none')) && false ?: '_'});
