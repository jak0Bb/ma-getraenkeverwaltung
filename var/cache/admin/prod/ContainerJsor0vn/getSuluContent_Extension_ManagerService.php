<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_content.extension.manager' shared service.

$this->services['sulu_content.extension.manager'] = $instance = new \Sulu\Component\Content\Extension\ExtensionManager();

$instance->addExtension(${($_ = isset($this->services['sulu_content.extension.seo']) ? $this->services['sulu_content.extension.seo'] : $this->services['sulu_content.extension.seo'] = new \Sulu\Bundle\ContentBundle\Content\Structure\SeoStructureExtension()) && false ?: '_'});
$instance->addExtension(${($_ = isset($this->services['sulu_content.extension.excerpt']) ? $this->services['sulu_content.extension.excerpt'] : $this->load('getSuluContent_Extension_ExcerptService.php')) && false ?: '_'});

return $instance;
