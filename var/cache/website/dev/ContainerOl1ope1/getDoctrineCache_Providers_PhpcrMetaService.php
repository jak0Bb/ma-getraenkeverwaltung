<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine_cache.providers.phpcr_meta' shared service.

return $this->services['doctrine_cache.providers.phpcr_meta'] = new \Doctrine\Common\Cache\FilesystemCache(($this->targetDirs[0].'/doctrine/cache/file_system'), NULL, 2);
