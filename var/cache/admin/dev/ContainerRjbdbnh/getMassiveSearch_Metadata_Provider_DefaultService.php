<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'massive_search.metadata.provider.default' shared service.

return $this->services['massive_search.metadata.provider.default'] = new \Massive\Bundle\SearchBundle\Search\Metadata\Provider\DefaultProvider(${($_ = isset($this->services['massive_search.metadata.factory']) ? $this->services['massive_search.metadata.factory'] : $this->load('getMassiveSearch_Metadata_FactoryService.php')) && false ?: '_'});