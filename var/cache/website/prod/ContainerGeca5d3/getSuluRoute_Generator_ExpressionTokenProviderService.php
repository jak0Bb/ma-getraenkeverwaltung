<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_route.generator.expression_token_provider' shared service.

return $this->services['sulu_route.generator.expression_token_provider'] = new \Sulu\Bundle\RouteBundle\Generator\SymfonyExpressionTokenProvider(${($_ = isset($this->services['sulu_website.translator.request_analyzer']) ? $this->services['sulu_website.translator.request_analyzer'] : $this->getSuluWebsite_Translator_RequestAnalyzerService()) && false ?: '_'});