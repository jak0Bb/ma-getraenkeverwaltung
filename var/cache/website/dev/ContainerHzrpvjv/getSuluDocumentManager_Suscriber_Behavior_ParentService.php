<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_document_manager.suscriber.behavior.parent' shared service.

return $this->services['sulu_document_manager.suscriber.behavior.parent'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\ParentSubscriber(${($_ = isset($this->services['sulu_document_manager.proxy_factory']) ? $this->services['sulu_document_manager.proxy_factory'] : $this->getSuluDocumentManager_ProxyFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_inspector']) ? $this->services['sulu_document_manager.document_inspector'] : $this->getSuluDocumentManager_DocumentInspectorService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_manager']) ? $this->services['sulu_document_manager.document_manager'] : $this->getSuluDocumentManager_DocumentManagerService()) && false ?: '_'});
