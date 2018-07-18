<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_custom_urls.subscriber' shared service.

return $this->services['sulu_custom_urls.subscriber'] = new \Sulu\Component\CustomUrl\Document\Subscriber\CustomUrlSubscriber(${($_ = isset($this->services['sulu_custom_urls.domain_generator']) ? $this->services['sulu_custom_urls.domain_generator'] : $this->load('getSuluCustomUrls_DomainGeneratorService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_manager']) ? $this->services['sulu_document_manager.document_manager'] : $this->load('getSuluDocumentManager_DocumentManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.path_builder']) ? $this->services['sulu_document_manager.path_builder'] : $this->load('getSuluDocumentManager_PathBuilderService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_inspector']) ? $this->services['sulu_document_manager.document_inspector'] : $this->getSuluDocumentManager_DocumentInspectorService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'});
