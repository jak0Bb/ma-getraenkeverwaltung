<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu.content.type.single_internal_link' shared service.

return $this->services['sulu.content.type.single_internal_link'] = new \Sulu\Bundle\ContentBundle\Content\Types\SingleInternalLink(${($_ = isset($this->services['sulu_content.reference_store.content']) ? $this->services['sulu_content.reference_store.content'] : $this->services['sulu_content.reference_store.content'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore()) && false ?: '_'}, 'SuluContentBundle:Template:content-types/single_internal_link.html.twig');
