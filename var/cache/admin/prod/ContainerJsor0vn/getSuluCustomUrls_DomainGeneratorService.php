<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_custom_urls.domain_generator' shared service.

return $this->services['sulu_custom_urls.domain_generator'] = new \Sulu\Component\CustomUrl\Generator\Generator(${($_ = isset($this->services['sulu_core.webspace.webspace_manager.url_replacer']) ? $this->services['sulu_core.webspace.webspace_manager.url_replacer'] : $this->services['sulu_core.webspace.webspace_manager.url_replacer'] = new \Sulu\Component\Webspace\Url\Replacer()) && false ?: '_'});