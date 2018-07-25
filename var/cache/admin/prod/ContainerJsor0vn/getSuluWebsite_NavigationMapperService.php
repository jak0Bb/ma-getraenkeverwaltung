<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_website.navigation_mapper' shared service.

return $this->services['sulu_website.navigation_mapper'] = new \Sulu\Bundle\WebsiteBundle\Navigation\NavigationMapper(${($_ = isset($this->services['sulu.content.mapper']) ? $this->services['sulu.content.mapper'] : $this->load('getSulu_Content_MapperService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.query_executor']) ? $this->services['sulu.content.query_executor'] : $this->load('getSulu_Content_QueryExecutorService.php')) && false ?: '_'}, new \Sulu\Bundle\WebsiteBundle\Navigation\NavigationQueryBuilder(${($_ = isset($this->services['sulu.content.structure_manager']) ? $this->services['sulu.content.structure_manager'] : $this->getSulu_Content_StructureManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_content.extension.manager']) ? $this->services['sulu_content.extension.manager'] : $this->load('getSuluContent_Extension_ManagerService.php')) && false ?: '_'}, 'i18n'), ${($_ = isset($this->services['sulu.phpcr.session']) ? $this->services['sulu.phpcr.session'] : $this->getSulu_Phpcr_SessionService()) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'});