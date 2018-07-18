<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_search.controller.website_search' shared service.

return $this->services['sulu_search.controller.website_search'] = new \Sulu\Bundle\SearchBundle\Controller\WebsiteSearchController(${($_ = isset($this->services['massive_search.search_manager']) ? $this->services['massive_search.search_manager'] : $this->load('getMassiveSearch_SearchManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.request_analyzer']) ? $this->services['sulu_core.webspace.request_analyzer'] : $this->getSuluCore_Webspace_RequestAnalyzerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_website.resolver.parameter']) ? $this->services['sulu_website.resolver.parameter'] : $this->load('getSuluWebsite_Resolver_ParameterService.php')) && false ?: '_'}, ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->getTemplatingService()) && false ?: '_'});
