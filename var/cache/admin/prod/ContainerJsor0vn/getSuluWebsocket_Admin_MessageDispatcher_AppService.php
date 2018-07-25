<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_websocket.admin.message_dispatcher.app' shared service.

$a = new \Sulu\Component\Websocket\MessageDispatcher\MessageDispatcher(${($_ = isset($this->services['sulu_websocket.admin.message_builder']) ? $this->services['sulu_websocket.admin.message_builder'] : $this->services['sulu_websocket.admin.message_builder'] = new \Sulu\Component\Websocket\MessageDispatcher\MessageBuilder()) && false ?: '_'});
$a->add('sulu_collaboration', ${($_ = isset($this->services['sulu_collaboration.message_handler']) ? $this->services['sulu_collaboration.message_handler'] : $this->load('getSuluCollaboration_MessageHandlerService.php')) && false ?: '_'});
$a->add('sulu_preview.preview', ${($_ = isset($this->services['sulu_preview.preview.message_component']) ? $this->services['sulu_preview.preview.message_component'] : $this->load('getSuluPreview_Preview_MessageComponentService.php')) && false ?: '_'});

return $this->services['sulu_websocket.admin.message_dispatcher.app'] = new \Sulu\Component\Websocket\MessageDispatcher\MessageDispatcherApp('admin', $a, ${($_ = isset($this->services['doctrine_cache.providers.sulu_websocket']) ? $this->services['doctrine_cache.providers.sulu_websocket'] : $this->services['doctrine_cache.providers.sulu_websocket'] = new \Doctrine\Common\Cache\FilesystemCache(($this->targetDirs[0].'/sulu/websocket'), NULL, 2)) && false ?: '_'});