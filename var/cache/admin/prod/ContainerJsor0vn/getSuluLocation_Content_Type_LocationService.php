<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_location.content.type.location' shared service.

return $this->services['sulu_location.content.type.location'] = new \Sulu\Bundle\LocationBundle\Content\Types\LocationContentType(${($_ = isset($this->services['sulu_content.node_repository']) ? $this->services['sulu_content.node_repository'] : $this->load('getSuluContent_NodeRepositoryService.php')) && false ?: '_'}, 'SuluLocationBundle:Template:content-types/location.html.twig', ${($_ = isset($this->services['sulu_location.map_manager']) ? $this->services['sulu_location.map_manager'] : $this->load('getSuluLocation_MapManagerService.php')) && false ?: '_'}, 'nominatim');
