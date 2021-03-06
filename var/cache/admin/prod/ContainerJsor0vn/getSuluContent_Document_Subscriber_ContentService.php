<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_content.document.subscriber.content' shared service.

return $this->services['sulu_content.document.subscriber.content'] = new \Sulu\Component\Content\Document\Subscriber\StructureSubscriber(${($_ = isset($this->services['sulu_document_manager.property_encoder']) ? $this->services['sulu_document_manager.property_encoder'] : $this->getSuluDocumentManager_PropertyEncoderService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.type_manager']) ? $this->services['sulu.content.type_manager'] : $this->getSulu_Content_TypeManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_inspector']) ? $this->services['sulu_document_manager.document_inspector'] : $this->getSuluDocumentManager_DocumentInspectorService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_content.compat.structure.legacy_property_factory']) ? $this->services['sulu_content.compat.structure.legacy_property_factory'] : $this->getSuluContent_Compat_Structure_LegacyPropertyFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}, $this->parameters['sulu.content.structure.default_types']);
