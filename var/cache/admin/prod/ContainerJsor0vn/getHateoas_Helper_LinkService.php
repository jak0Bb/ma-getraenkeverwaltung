<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'hateoas.helper.link' shared service.

return $this->services['hateoas.helper.link'] = new \Hateoas\Helper\LinkHelper(${($_ = isset($this->services['hateoas.link_factory']) ? $this->services['hateoas.link_factory'] : $this->load('getHateoas_LinkFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['hateoas.configuration.relations_repository']) ? $this->services['hateoas.configuration.relations_repository'] : $this->load('getHateoas_Configuration_RelationsRepositoryService.php')) && false ?: '_'});
