<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hateoas.link_factory' shared service.

return $this->services['hateoas.link_factory'] = new \Hateoas\Factory\LinkFactory(${($_ = isset($this->services['hateoas.expression.evaluator']) ? $this->services['hateoas.expression.evaluator'] : $this->load('getHateoas_Expression_EvaluatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['hateoas.generator.registry']) ? $this->services['hateoas.generator.registry'] : $this->load('getHateoas_Generator_RegistryService.php')) && false ?: '_'});