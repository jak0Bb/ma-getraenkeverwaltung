<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_security.document.serializer.subscriber.security' shared service.

return $this->services['sulu_security.document.serializer.subscriber.security'] = new \Sulu\Bundle\SecurityBundle\Serializer\Subscriber\SecuritySubscriber(${($_ = isset($this->services['sulu_security.access_control_manager']) ? $this->services['sulu_security.access_control_manager'] : $this->load('getSuluSecurity_AccessControlManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});