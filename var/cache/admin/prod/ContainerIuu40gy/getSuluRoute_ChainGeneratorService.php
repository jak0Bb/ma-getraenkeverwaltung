<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_route.chain_generator' shared service.

return $this->services['sulu_route.chain_generator'] = new \Sulu\Bundle\RouteBundle\Generator\ChainRouteGenerator(array(), array(), ${($_ = isset($this->services['sulu.repository.route']) ? $this->services['sulu.repository.route'] : $this->load('getSulu_Repository_RouteService.php')) && false ?: '_'});
