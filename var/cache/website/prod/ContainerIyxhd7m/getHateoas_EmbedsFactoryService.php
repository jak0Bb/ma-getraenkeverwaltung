<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hateoas.embeds_factory' shared service.

return $this->services['hateoas.embeds_factory'] = new \Hateoas\Factory\EmbeddedsFactory(${($_ = isset($this->services['hateoas.configuration.relations_repository']) ? $this->services['hateoas.configuration.relations_repository'] : $this->getHateoas_Configuration_RelationsRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['hateoas.expression.evaluator']) ? $this->services['hateoas.expression.evaluator'] : $this->getHateoas_Expression_EvaluatorService()) && false ?: '_'}, ${($_ = isset($this->services['hateoas.serializer.exclusion_manager']) ? $this->services['hateoas.serializer.exclusion_manager'] : $this->load('getHateoas_Serializer_ExclusionManagerService.php')) && false ?: '_'});
