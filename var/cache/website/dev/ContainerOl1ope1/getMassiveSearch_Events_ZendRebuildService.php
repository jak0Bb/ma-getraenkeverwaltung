<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'massive_search.events.zend_rebuild' shared service.

return $this->services['massive_search.events.zend_rebuild'] = new \Massive\Bundle\SearchBundle\Search\EventListener\ZendRebuildSubscriber(${($_ = isset($this->services['massive_search.adapter.zend_lucene']) ? $this->services['massive_search.adapter.zend_lucene'] : $this->load('getMassiveSearch_Adapter_ZendLuceneService.php')) && false ?: '_'}, ${($_ = isset($this->services['massive_search.prefix_decorator']) ? $this->services['massive_search.prefix_decorator'] : $this->load('getMassiveSearch_PrefixDecoratorService.php')) && false ?: '_'});