<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_website.default_locale.portal_provider' shared service.

return $this->services['sulu_website.default_locale.portal_provider'] = new \Sulu\Bundle\WebsiteBundle\Locale\PortalDefaultLocaleProvider(${($_ = isset($this->services['sulu_core.webspace.request_analyzer']) ? $this->services['sulu_core.webspace.request_analyzer'] : $this->getSuluCore_Webspace_RequestAnalyzerService()) && false ?: '_'});
