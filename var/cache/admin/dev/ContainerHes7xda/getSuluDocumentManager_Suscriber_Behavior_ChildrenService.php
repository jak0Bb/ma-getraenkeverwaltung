<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_document_manager.suscriber.behavior.children' shared service.

return $this->services['sulu_document_manager.suscriber.behavior.children'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\ChildrenSubscriber(${($_ = isset($this->services['sulu_document_manager.proxy_factory']) ? $this->services['sulu_document_manager.proxy_factory'] : $this->getSuluDocumentManager_ProxyFactoryService()) && false ?: '_'});