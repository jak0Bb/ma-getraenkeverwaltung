<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_website.sitemap.pages_provider' shared service.

return $this->services['sulu_website.sitemap.pages_provider'] = new \Sulu\Bundle\WebsiteBundle\Sitemap\Provider\PagesSitemapProvider(${($_ = isset($this->services['sulu_content.content_repository']) ? $this->services['sulu_content.content_repository'] : $this->getSuluContent_ContentRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'});
