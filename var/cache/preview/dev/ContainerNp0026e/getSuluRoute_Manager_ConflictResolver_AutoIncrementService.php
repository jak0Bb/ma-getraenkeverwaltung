<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_route.manager.conflict_resolver.auto_increment' shared service.

return $this->services['sulu_route.manager.conflict_resolver.auto_increment'] = new \Sulu\Bundle\RouteBundle\Manager\AutoIncrementConflictResolver(${($_ = isset($this->services['sulu.repository.route']) ? $this->services['sulu.repository.route'] : $this->getSulu_Repository_RouteService()) && false ?: '_'});
