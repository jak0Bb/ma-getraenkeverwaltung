<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'phpcr_migrations.version_finder' shared service.

return $this->services['phpcr_migrations.version_finder'] = new \PHPCR\Migrations\VersionFinder($this->getParameter('phpcr_migrations.paths'));
