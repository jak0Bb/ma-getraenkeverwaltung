<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_snippet.default_snippet.manager' shared service.

return $this->services['sulu_snippet.default_snippet.manager'] = new \Sulu\Bundle\SnippetBundle\Snippet\DefaultSnippetManager(${($_ = isset($this->services['sulu_core.webspace.settings_manager']) ? $this->services['sulu_core.webspace.settings_manager'] : $this->load('getSuluCore_Webspace_SettingsManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_manager']) ? $this->services['sulu_document_manager.document_manager'] : $this->load('getSuluDocumentManager_DocumentManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_registry']) ? $this->services['sulu_document_manager.document_registry'] : $this->services['sulu_document_manager.document_registry'] = new \Sulu\Component\DocumentManager\DocumentRegistry('en')) && false ?: '_'}, $this->parameters['sulu_snippet.areas']);