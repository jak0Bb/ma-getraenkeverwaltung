<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_website.exception_controller' shared service.

$a = ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'};

return $this->services['sulu_website.exception_controller'] = new \Sulu\Bundle\WebsiteBundle\Controller\ExceptionController(new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($a, false), ${($_ = isset($this->services['sulu_core.webspace.request_analyzer']) ? $this->services['sulu_core.webspace.request_analyzer'] : $this->getSuluCore_Webspace_RequestAnalyzerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_website.resolver.parameter']) ? $this->services['sulu_website.resolver.parameter'] : $this->load('getSuluWebsite_Resolver_ParameterService.php')) && false ?: '_'}, $a, false);