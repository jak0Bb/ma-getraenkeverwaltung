<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu.cache.warmer.structure' shared service.

return $this->services['sulu.cache.warmer.structure'] = new \Sulu\Bundle\CoreBundle\Cache\StructureWarmer(${($_ = isset($this->services['sulu.content.structure_manager']) ? $this->services['sulu.content.structure_manager'] : $this->getSulu_Content_StructureManagerService()) && false ?: '_'});
