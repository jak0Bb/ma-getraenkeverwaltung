<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_snippet.document.snippet_initializer' shared service.

return $this->services['sulu_snippet.document.snippet_initializer'] = new \Sulu\Bundle\SnippetBundle\Document\SnippetInitializer(${($_ = isset($this->services['sulu_document_manager.node_manager']) ? $this->services['sulu_document_manager.node_manager'] : $this->getSuluDocumentManager_NodeManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.path_builder']) ? $this->services['sulu_document_manager.path_builder'] : $this->getSuluDocumentManager_PathBuilderService()) && false ?: '_'});
