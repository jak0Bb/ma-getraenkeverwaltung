<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_media.permission_listener' shared service.

return $this->services['sulu_media.permission_listener'] = new \Sulu\Bundle\MediaBundle\Search\EventListener\PermissionListener(${($_ = isset($this->services['sulu_media.file_version_meta_repository']) ? $this->services['sulu_media.file_version_meta_repository'] : $this->load('getSuluMedia_FileVersionMetaRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['massive_search.search_manager']) ? $this->services['massive_search.search_manager'] : $this->load('getMassiveSearch_SearchManagerService.php')) && false ?: '_'});
