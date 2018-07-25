<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_content.command.maintain_resource_locator' shared service.

return $this->services['sulu_content.command.maintain_resource_locator'] = new \Sulu\Bundle\ContentBundle\Command\MaintainResourceLocatorCommand(${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.phpcr.session']) ? $this->services['sulu.phpcr.session'] : $this->getSulu_Phpcr_SessionService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.decorated_live_session']) ? $this->services['sulu_document_manager.decorated_live_session'] : $this->load('getSuluDocumentManager_DecoratedLiveSessionService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.metadata_factory']) ? $this->services['sulu_document_manager.metadata_factory'] : $this->getSuluDocumentManager_MetadataFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_content.structure.factory']) ? $this->services['sulu_content.structure.factory'] : $this->getSuluContent_Structure_FactoryService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.property_encoder']) ? $this->services['sulu_document_manager.property_encoder'] : $this->getSuluDocumentManager_PropertyEncoderService()) && false ?: '_'});