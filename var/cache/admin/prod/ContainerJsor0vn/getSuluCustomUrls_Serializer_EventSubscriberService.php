<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_custom_urls.serializer.event_subscriber' shared service.

return $this->services['sulu_custom_urls.serializer.event_subscriber'] = new \Sulu\Bundle\CustomUrlBundle\EventListener\CustomUrlSerializeEventSubscriber(${($_ = isset($this->services['sulu_custom_urls.domain_generator']) ? $this->services['sulu_custom_urls.domain_generator'] : $this->load('getSuluCustomUrls_DomainGeneratorService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_security.user_manager']) ? $this->services['sulu_security.user_manager'] : $this->load('getSuluSecurity_UserManagerService.php')) && false ?: '_'});
