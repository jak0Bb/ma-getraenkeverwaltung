<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_document_manager.node_manager' shared service.

return $this->services['sulu_document_manager.node_manager'] = new \Sulu\Component\DocumentManager\NodeManager(${($_ = isset($this->services['sulu_document_manager.decorated_default_session']) ? $this->services['sulu_document_manager.decorated_default_session'] : $this->getSuluDocumentManager_DecoratedDefaultSessionService()) && false ?: '_'});
