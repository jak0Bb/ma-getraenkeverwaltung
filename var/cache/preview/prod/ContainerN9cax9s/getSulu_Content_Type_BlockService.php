<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu.content.type.block' shared service.

return $this->services['sulu.content.type.block'] = new \Sulu\Component\Content\Types\BlockContentType(${($_ = isset($this->services['sulu.content.type_manager']) ? $this->services['sulu.content.type_manager'] : $this->getSulu_Content_TypeManagerService()) && false ?: '_'}, 'SuluContentBundle:Template:content-types/block.html.twig', 'i18n');
