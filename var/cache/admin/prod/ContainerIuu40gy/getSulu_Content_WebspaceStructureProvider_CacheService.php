<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu.content.webspace_structure_provider.cache' shared service.

return $this->services['sulu.content.webspace_structure_provider.cache'] = new \Doctrine\Common\Cache\FilesystemCache(($this->targetDirs[0].'/sulu/webspace_structures'));
