<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_document_manager.subscriber.phpcr.mixin' shared service.

return $this->services['sulu_document_manager.subscriber.phpcr.mixin'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\MixinSubscriber(${($_ = isset($this->services['sulu_document_manager.metadata_factory']) ? $this->services['sulu_document_manager.metadata_factory'] : $this->getSuluDocumentManager_MetadataFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.property_encoder']) ? $this->services['sulu_document_manager.property_encoder'] : $this->getSuluDocumentManager_PropertyEncoderService()) && false ?: '_'});