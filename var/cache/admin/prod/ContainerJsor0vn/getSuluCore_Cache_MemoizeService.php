<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_core.cache.memoize' shared service.

return $this->services['sulu_core.cache.memoize'] = new \Sulu\Component\Cache\Memoize(${($_ = isset($this->services['sulu_core.cache.memoize.cache']) ? $this->services['sulu_core.cache.memoize.cache'] : $this->services['sulu_core.cache.memoize.cache'] = new \Doctrine\Common\Cache\ArrayCache()) && false ?: '_'}, 1);
