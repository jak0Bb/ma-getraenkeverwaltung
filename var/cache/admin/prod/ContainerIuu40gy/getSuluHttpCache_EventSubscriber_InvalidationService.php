<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_http_cache.event_subscriber.invalidation' shared service.

$a = ${($_ = isset($this->services['sulu_http_cache.handler.aggregate']) ? $this->services['sulu_http_cache.handler.aggregate'] : $this->getSuluHttpCache_Handler_AggregateService()) && false ?: '_'};

return $this->services['sulu_http_cache.event_subscriber.invalidation'] = new \Sulu\Component\HttpCache\EventSubscriber\InvalidationSubscriber($a, $a, ${($_ = isset($this->services['sulu.content.structure_manager']) ? $this->services['sulu.content.structure_manager'] : $this->getSulu_Content_StructureManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_inspector']) ? $this->services['sulu_document_manager.document_inspector'] : $this->getSuluDocumentManager_DocumentInspectorService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.resource_locator.strategy_pool']) ? $this->services['sulu.content.resource_locator.strategy_pool'] : $this->load('getSulu_Content_ResourceLocator_StrategyPoolService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['sulu_tag.tag_manager']) ? $this->services['sulu_tag.tag_manager'] : $this->getSuluTag_TagManagerService()) && false ?: '_'}, 'prod');
