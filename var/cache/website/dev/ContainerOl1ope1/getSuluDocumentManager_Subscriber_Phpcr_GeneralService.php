<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_document_manager.subscriber.phpcr.general' shared service.

return $this->services['sulu_document_manager.subscriber.phpcr.general'] = new \Sulu\Component\DocumentManager\Subscriber\Phpcr\GeneralSubscriber(${($_ = isset($this->services['sulu_document_manager.document_registry']) ? $this->services['sulu_document_manager.document_registry'] : $this->services['sulu_document_manager.document_registry'] = new \Sulu\Component\DocumentManager\DocumentRegistry('en')) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.node_manager']) ? $this->services['sulu_document_manager.node_manager'] : $this->getSuluDocumentManager_NodeManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.node_helper']) ? $this->services['sulu_document_manager.node_helper'] : $this->services['sulu_document_manager.node_helper'] = new \Sulu\Component\DocumentManager\NodeHelper()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.event_dispatcher']) ? $this->services['sulu_document_manager.event_dispatcher'] : $this->getSuluDocumentManager_EventDispatcherService()) && false ?: '_'});
