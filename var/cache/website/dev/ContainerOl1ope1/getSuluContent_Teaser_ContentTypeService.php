<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_content.teaser.content_type' shared service.

return $this->services['sulu_content.teaser.content_type'] = new \Sulu\Bundle\ContentBundle\Teaser\TeaserContentType('SuluContentBundle:Template:content-types/teaser-selection.html.twig', ${($_ = isset($this->services['sulu_content.teaser.provider_pool']) ? $this->services['sulu_content.teaser.provider_pool'] : $this->load('getSuluContent_Teaser_ProviderPoolService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_content.teaser.manager']) ? $this->services['sulu_content.teaser.manager'] : $this->load('getSuluContent_Teaser_ManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_website.reference_store_pool']) ? $this->services['sulu_website.reference_store_pool'] : $this->load('getSuluWebsite_ReferenceStorePoolService.php')) && false ?: '_'});
