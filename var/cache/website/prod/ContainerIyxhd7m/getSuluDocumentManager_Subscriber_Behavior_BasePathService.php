<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_document_manager.subscriber.behavior.base_path' shared service.

return $this->services['sulu_document_manager.subscriber.behavior.base_path'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Path\BasePathSubscriber(${($_ = isset($this->services['sulu_document_manager.node_manager']) ? $this->services['sulu_document_manager.node_manager'] : $this->getSuluDocumentManager_NodeManagerService()) && false ?: '_'}, '/cmf');
