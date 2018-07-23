<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.form.ma_getraenkeverwaltung' shared service.

$a = ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->load('getSecurity_HttpUtilsService.php')) && false ?: '_'};
$b = ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'};

$c = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, array());
$c->setOptions(array('login_path' => 'sulu_community.login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
$c->setProviderKey('ma_getraenkeverwaltung');

$d = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->getHttpKernelService()) && false ?: '_'}, $a, array(), $b);
$d->setOptions(array('login_path' => 'sulu_community.login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

$this->services['security.authentication.listener.form.ma_getraenkeverwaltung'] = $instance = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.session_strategy.ma_getraenkeverwaltung']) ? $this->services['security.authentication.session_strategy.ma_getraenkeverwaltung'] : $this->services['security.authentication.session_strategy.ma_getraenkeverwaltung'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('none')) && false ?: '_'}, $a, 'ma_getraenkeverwaltung', $c, $d, array('check_path' => 'sulu_community.login', 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $b, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, NULL);

$instance->setRememberMeServices(${($_ = isset($this->services['security.authentication.rememberme.services.simplehash.ma_getraenkeverwaltung']) ? $this->services['security.authentication.rememberme.services.simplehash.ma_getraenkeverwaltung'] : $this->load('getSecurity_Authentication_Rememberme_Services_Simplehash_MaGetraenkeverwaltungService.php')) && false ?: '_'});

return $instance;
