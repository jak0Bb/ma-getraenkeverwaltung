<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_custom_urls.invalidate.subscriber' shared service.

return $this->services['sulu_custom_urls.invalidate.subscriber'] = new \Sulu\Component\CustomUrl\Document\Subscriber\InvalidateSubscriber(${($_ = isset($this->services['sulu_custom_urls.manager']) ? $this->services['sulu_custom_urls.manager'] : $this->load('getSuluCustomUrls_ManagerService.php')) && false ?: '_'});
