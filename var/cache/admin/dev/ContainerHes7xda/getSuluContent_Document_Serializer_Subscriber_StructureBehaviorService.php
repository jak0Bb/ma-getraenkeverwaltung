<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_content.document.serializer.subscriber.structure_behavior' shared service.

return $this->services['sulu_content.document.serializer.subscriber.structure_behavior'] = new \Sulu\Bundle\ContentBundle\Serializer\Subscriber\StructureSubscriber(${($_ = isset($this->services['sulu_document_manager.document_inspector']) ? $this->services['sulu_document_manager.document_inspector'] : $this->getSuluDocumentManager_DocumentInspectorService()) && false ?: '_'});
