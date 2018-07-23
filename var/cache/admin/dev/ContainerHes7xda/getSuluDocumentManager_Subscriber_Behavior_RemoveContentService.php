<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_document_manager.subscriber.behavior.remove_content' shared service.

return $this->services['sulu_document_manager.subscriber.behavior.remove_content'] = new \Sulu\Component\Content\Document\Subscriber\StructureRemoveSubscriber(${($_ = isset($this->services['sulu_document_manager.document_manager']) ? $this->services['sulu_document_manager.document_manager'] : $this->getSuluDocumentManager_DocumentManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_inspector']) ? $this->services['sulu_document_manager.document_inspector'] : $this->getSuluDocumentManager_DocumentInspectorService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.decorated_default_session']) ? $this->services['sulu_document_manager.decorated_default_session'] : $this->getSuluDocumentManager_DecoratedDefaultSessionService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.decorated_live_session']) ? $this->services['sulu_document_manager.decorated_live_session'] : $this->getSuluDocumentManager_DecoratedLiveSessionService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.metadata_factory']) ? $this->services['sulu_document_manager.metadata_factory'] : $this->getSuluDocumentManager_MetadataFactoryService()) && false ?: '_'});
