<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_snippet.twig.snippet' shared service.

return $this->services['sulu_snippet.twig.snippet'] = new \Sulu\Bundle\SnippetBundle\Twig\SnippetTwigExtension(${($_ = isset($this->services['sulu.content.mapper']) ? $this->services['sulu.content.mapper'] : $this->load('getSulu_Content_MapperService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.request_analyzer']) ? $this->services['sulu_core.webspace.request_analyzer'] : $this->getSuluCore_Webspace_RequestAnalyzerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_website.resolver.structure']) ? $this->services['sulu_website.resolver.structure'] : $this->load('getSuluWebsite_Resolver_StructureService.php')) && false ?: '_'});
