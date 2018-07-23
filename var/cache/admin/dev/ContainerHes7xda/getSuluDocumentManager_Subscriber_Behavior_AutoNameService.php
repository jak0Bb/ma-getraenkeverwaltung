<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_document_manager.subscriber.behavior.auto_name' shared service.

return $this->services['sulu_document_manager.subscriber.behavior.auto_name'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Path\AutoNameSubscriber(${($_ = isset($this->services['sulu_document_manager.document_registry']) ? $this->services['sulu_document_manager.document_registry'] : $this->services['sulu_document_manager.document_registry'] = new \Sulu\Component\DocumentManager\DocumentRegistry('en')) && false ?: '_'}, new \Sulu\Component\DocumentManager\Slugifier\NodeNameSlugifier(${($_ = isset($this->services['sulu_document_manager.slugifier']) ? $this->services['sulu_document_manager.slugifier'] : $this->services['sulu_document_manager.slugifier'] = new \Symfony\Cmf\Api\Slugifier\CallbackSlugifier('Ferrandini\\Urlizer::urlize')) && false ?: '_'}), new \Sulu\Component\DocumentManager\NameResolver(), ${($_ = isset($this->services['sulu_document_manager.node_manager']) ? $this->services['sulu_document_manager.node_manager'] : $this->getSuluDocumentManager_NodeManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.decorated_live_session']) ? $this->services['sulu_document_manager.decorated_live_session'] : $this->getSuluDocumentManager_DecoratedLiveSessionService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.decorated_default_session']) ? $this->services['sulu_document_manager.decorated_default_session'] : $this->getSuluDocumentManager_DecoratedDefaultSessionService()) && false ?: '_'});
