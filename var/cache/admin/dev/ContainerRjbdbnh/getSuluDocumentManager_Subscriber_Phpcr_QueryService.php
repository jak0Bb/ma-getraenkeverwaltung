<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_document_manager.subscriber.phpcr.query' shared service.

return $this->services['sulu_document_manager.subscriber.phpcr.query'] = new \Sulu\Component\DocumentManager\Subscriber\Phpcr\QuerySubscriber(${($_ = isset($this->services['sulu_document_manager.decorated_default_session']) ? $this->services['sulu_document_manager.decorated_default_session'] : $this->getSuluDocumentManager_DecoratedDefaultSessionService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.event_dispatcher']) ? $this->services['sulu_document_manager.event_dispatcher'] : $this->getSuluDocumentManager_EventDispatcherService()) && false ?: '_'});