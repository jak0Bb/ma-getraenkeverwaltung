<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_resource_segment.document.subscriber.resource_segment' shared service.

return $this->services['sulu_resource_segment.document.subscriber.resource_segment'] = new \Sulu\Component\Content\Document\Subscriber\ResourceSegmentSubscriber(${($_ = isset($this->services['sulu_document_manager.property_encoder']) ? $this->services['sulu_document_manager.property_encoder'] : $this->getSuluDocumentManager_PropertyEncoderService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_manager']) ? $this->services['sulu_document_manager.document_manager'] : $this->load('getSuluDocumentManager_DocumentManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_inspector']) ? $this->services['sulu_document_manager.document_inspector'] : $this->getSuluDocumentManager_DocumentInspectorService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.resource_locator.strategy_pool']) ? $this->services['sulu.content.resource_locator.strategy_pool'] : $this->load('getSulu_Content_ResourceLocator_StrategyPoolService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.decorated_default_session']) ? $this->services['sulu_document_manager.decorated_default_session'] : $this->getSuluDocumentManager_DecoratedDefaultSessionService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.decorated_live_session']) ? $this->services['sulu_document_manager.decorated_live_session'] : $this->load('getSuluDocumentManager_DecoratedLiveSessionService.php')) && false ?: '_'});
