<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_document_manager.document.subscriber.title' shared service.

return $this->services['sulu_document_manager.document.subscriber.title'] = new \Sulu\Component\Content\Document\Subscriber\TitleSubscriber(${($_ = isset($this->services['sulu_document_manager.property_encoder']) ? $this->services['sulu_document_manager.property_encoder'] : $this->getSuluDocumentManager_PropertyEncoderService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_inspector']) ? $this->services['sulu_document_manager.document_inspector'] : $this->getSuluDocumentManager_DocumentInspectorService()) && false ?: '_'});