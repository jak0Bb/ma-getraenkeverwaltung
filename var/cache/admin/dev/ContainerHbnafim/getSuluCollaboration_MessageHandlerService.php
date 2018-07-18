<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_collaboration.message_handler' shared service.

return $this->services['sulu_collaboration.message_handler'] = new \Sulu\Component\Collaboration\CollaborationMessageHandler(${($_ = isset($this->services['sulu_websocket.admin.message_builder']) ? $this->services['sulu_websocket.admin.message_builder'] : $this->services['sulu_websocket.admin.message_builder'] = new \Sulu\Component\Websocket\MessageDispatcher\MessageBuilder()) && false ?: '_'}, ${($_ = isset($this->services['sulu_security.user_repository']) ? $this->services['sulu_security.user_repository'] : $this->load('getSuluSecurity_UserRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['doctrine_cache.providers.sulu_collaboration_entity']) ? $this->services['doctrine_cache.providers.sulu_collaboration_entity'] : $this->services['doctrine_cache.providers.sulu_collaboration_entity'] = new \Doctrine\Common\Cache\FilesystemCache(($this->targetDirs[0].'/sulu/collaboration/entity'), NULL, 2)) && false ?: '_'}, ${($_ = isset($this->services['doctrine_cache.providers.sulu_collaboration_connection']) ? $this->services['doctrine_cache.providers.sulu_collaboration_connection'] : $this->services['doctrine_cache.providers.sulu_collaboration_connection'] = new \Doctrine\Common\Cache\FilesystemCache(($this->targetDirs[0].'/sulu/collaboration/connection'), NULL, 2)) && false ?: '_'}, 300000, 10000);
