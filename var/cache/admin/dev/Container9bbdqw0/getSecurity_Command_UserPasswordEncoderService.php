<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.command.user_password_encoder' shared service.

$this->services['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->load('getSecurity_EncoderFactoryService.php')) && false ?: '_'}, array(0 => 'Sulu\\Bundle\\SecurityBundle\\Entity\\User'));

$instance->setName('security:encode-password');

return $instance;
