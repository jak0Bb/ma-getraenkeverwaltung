<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_content.teaser.provider_pool' shared service.

return $this->services['sulu_content.teaser.provider_pool'] = new \Sulu\Bundle\ContentBundle\Teaser\Provider\TeaserProviderPool(array('content' => ${($_ = isset($this->services['sulu_content.teaser.provider.content']) ? $this->services['sulu_content.teaser.provider.content'] : $this->load('getSuluContent_Teaser_Provider_ContentService.php')) && false ?: '_'}));
