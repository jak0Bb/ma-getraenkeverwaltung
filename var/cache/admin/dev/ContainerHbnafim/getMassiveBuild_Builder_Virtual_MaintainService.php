<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'massive_build.builder.virtual.maintain' shared service.

return $this->services['massive_build.builder.virtual.maintain'] = new \Massive\Bundle\BuildBundle\Builder\VirtualBuilder('maintain', array(0 => 'node_order', 1 => 'search_index', 2 => 'phpcr_migrations'));
