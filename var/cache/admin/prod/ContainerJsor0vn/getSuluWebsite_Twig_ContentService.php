<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_website.twig.content' shared service.

return $this->services['sulu_website.twig.content'] = new \Sulu\Bundle\WebsiteBundle\Twig\Content\ContentTwigExtension(${($_ = isset($this->services['sulu.content.mapper']) ? $this->services['sulu.content.mapper'] : $this->load('getSulu_Content_MapperService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_website.resolver.structure']) ? $this->services['sulu_website.resolver.structure'] : $this->load('getSuluWebsite_Resolver_StructureService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu.phpcr.session']) ? $this->services['sulu.phpcr.session'] : $this->getSulu_Phpcr_SessionService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.request_analyzer']) ? $this->services['sulu_core.webspace.request_analyzer'] : $this->getSuluCore_Webspace_RequestAnalyzerService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
