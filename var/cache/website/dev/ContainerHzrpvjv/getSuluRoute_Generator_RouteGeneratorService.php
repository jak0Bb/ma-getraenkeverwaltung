<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_route.generator.route_generator' shared service.

return $this->services['sulu_route.generator.route_generator'] = new \Sulu\Bundle\RouteBundle\Generator\RouteGenerator(${($_ = isset($this->services['sulu_route.generator.expression_token_provider']) ? $this->services['sulu_route.generator.expression_token_provider'] : $this->load('getSuluRoute_Generator_ExpressionTokenProviderService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.slugifier']) ? $this->services['sulu_document_manager.slugifier'] : $this->services['sulu_document_manager.slugifier'] = new \Symfony\Cmf\Api\Slugifier\CallbackSlugifier('Ferrandini\\Urlizer::urlize')) && false ?: '_'});