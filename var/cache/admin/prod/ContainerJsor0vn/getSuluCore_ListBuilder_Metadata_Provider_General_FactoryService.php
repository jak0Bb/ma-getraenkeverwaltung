<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_core.list_builder.metadata.provider.general.factory' shared service.

$this->services['sulu_core.list_builder.metadata.provider.general.factory'] = $instance = new \Metadata\MetadataFactory(${($_ = isset($this->services['sulu_core.list_builder.metadata.provider.general.driver.xml']) ? $this->services['sulu_core.list_builder.metadata.provider.general.driver.xml'] : $this->load('getSuluCore_ListBuilder_Metadata_Provider_General_Driver_XmlService.php')) && false ?: '_'}, 'Metadata\\ClassHierarchyMetadata', false);

$instance->setCache(${($_ = isset($this->services['sulu_core.list_builder.metadata.provider.general.cache']) ? $this->services['sulu_core.list_builder.metadata.provider.general.cache'] : $this->services['sulu_core.list_builder.metadata.provider.general.cache'] = new \Metadata\Cache\FileCache(($this->targetDirs[0].'/sulu/list-builder/general'))) && false ?: '_'});

return $instance;
