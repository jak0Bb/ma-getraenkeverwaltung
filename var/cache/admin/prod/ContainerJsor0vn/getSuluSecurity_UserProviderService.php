<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_security.user_provider' shared service.

return $this->services['sulu_security.user_provider'] = new \Sulu\Bundle\SecurityBundle\User\UserProvider(${($_ = isset($this->services['sulu_security.user_repository']) ? $this->services['sulu_security.user_repository'] : $this->load('getSuluSecurity_UserRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, 'Sulu');