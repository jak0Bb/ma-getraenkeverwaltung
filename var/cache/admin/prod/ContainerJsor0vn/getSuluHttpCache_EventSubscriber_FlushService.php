<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sulu_http_cache.event_subscriber.flush' shared service.

return $this->services['sulu_http_cache.event_subscriber.flush'] = new \Sulu\Component\HttpCache\EventSubscriber\FlushSubscriber(${($_ = isset($this->services['sulu_http_cache.handler.aggregate']) ? $this->services['sulu_http_cache.handler.aggregate'] : $this->getSuluHttpCache_Handler_AggregateService()) && false ?: '_'});
