<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_document_manager.document_manager' shared service.

return $this->services['sulu_document_manager.document_manager'] = new \Sulu\Component\DocumentManager\DocumentManager(${($_ = isset($this->services['sulu_document_manager.event_dispatcher']) ? $this->services['sulu_document_manager.event_dispatcher'] : $this->getSuluDocumentManager_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.node_manager']) ? $this->services['sulu_document_manager.node_manager'] : $this->load('getSuluDocumentManager_NodeManagerService.php')) && false ?: '_'});
