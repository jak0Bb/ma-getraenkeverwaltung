<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_content.smart_content.data_provider_pool' shared service.

$this->services['sulu_content.smart_content.data_provider_pool'] = $instance = new \Sulu\Component\SmartContent\DataProviderPool();

$instance->add('contact', ${($_ = isset($this->services['sulu_contact.smart_content.data_provider.contact']) ? $this->services['sulu_contact.smart_content.data_provider.contact'] : $this->load('getSuluContact_SmartContent_DataProvider_ContactService.php')) && false ?: '_'});
$instance->add('account', ${($_ = isset($this->services['sulu_contact.smart_content.data_provider.account']) ? $this->services['sulu_contact.smart_content.data_provider.account'] : $this->load('getSuluContact_SmartContent_DataProvider_AccountService.php')) && false ?: '_'});
$instance->add('media', ${($_ = isset($this->services['sulu_media.smart_content.data_provider.media']) ? $this->services['sulu_media.smart_content.data_provider.media'] : $this->load('getSuluMedia_SmartContent_DataProvider_MediaService.php')) && false ?: '_'});
$instance->add('snippet', ${($_ = isset($this->services['sulu_snippet.smart_content.snippet_data_provider']) ? $this->services['sulu_snippet.smart_content.snippet_data_provider'] : $this->load('getSuluSnippet_SmartContent_SnippetDataProviderService.php')) && false ?: '_'});
$instance->add('content', ${($_ = isset($this->services['sulu_content.smart_content.data_provider.content']) ? $this->services['sulu_content.smart_content.data_provider.content'] : $this->load('getSuluContent_SmartContent_DataProvider_ContentService.php')) && false ?: '_'});

return $instance;
