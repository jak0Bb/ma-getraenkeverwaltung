<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'massive_build.builder.virtual.prod' shared service.

return $this->services['massive_build.builder.virtual.prod'] = new \Massive\Bundle\BuildBundle\Builder\VirtualBuilder('prod', array(0 => 'community', 1 => 'database', 2 => 'phpcr', 3 => 'fixtures', 4 => 'phpcr_migrations', 5 => 'system_collections'));
