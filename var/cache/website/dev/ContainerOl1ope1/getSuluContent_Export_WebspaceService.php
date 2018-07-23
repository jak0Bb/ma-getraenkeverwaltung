<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_content.export.webspace' shared service.

return $this->services['sulu_content.export.webspace'] = new \Sulu\Component\Content\Export\WebspaceExport(${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->getTemplatingService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_manager']) ? $this->services['sulu_document_manager.document_manager'] : $this->getSuluDocumentManager_DocumentManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_inspector']) ? $this->services['sulu_document_manager.document_inspector'] : $this->getSuluDocumentManager_DocumentInspectorService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.structure_manager']) ? $this->services['sulu.content.structure_manager'] : $this->getSulu_Content_StructureManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_content.extension.manager']) ? $this->services['sulu_content.extension.manager'] : $this->getSuluContent_Extension_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_content.export.manager']) ? $this->services['sulu_content.export.manager'] : $this->getSuluContent_Export_ManagerService()) && false ?: '_'}, $this->parameters['sulu_content.export.webspace.formats']);
