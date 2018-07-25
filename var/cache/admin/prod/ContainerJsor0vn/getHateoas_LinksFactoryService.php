<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hateoas.links_factory' shared service.

return $this->services['hateoas.links_factory'] = new \Hateoas\Factory\LinksFactory(${($_ = isset($this->services['hateoas.configuration.relations_repository']) ? $this->services['hateoas.configuration.relations_repository'] : $this->load('getHateoas_Configuration_RelationsRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['hateoas.link_factory']) ? $this->services['hateoas.link_factory'] : $this->load('getHateoas_LinkFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['hateoas.serializer.exclusion_manager']) ? $this->services['hateoas.serializer.exclusion_manager'] : $this->load('getHateoas_Serializer_ExclusionManagerService.php')) && false ?: '_'});
