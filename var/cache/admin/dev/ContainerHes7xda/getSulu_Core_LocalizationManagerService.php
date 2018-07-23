<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu.core.localization_manager' shared service.

$this->services['sulu.core.localization_manager'] = $instance = new \Sulu\Component\Localization\Manager\LocalizationManager();

$instance->addLocalizationProvider(new \Sulu\Component\Webspace\Manager\WebspaceManager(${($_ = isset($this->services['sulu_core.webspace.loader.delegator']) ? $this->services['sulu_core.webspace.loader.delegator'] : $this->getSuluCore_Webspace_Loader_DelegatorService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.webspace_manager.url_replacer']) ? $this->services['sulu_core.webspace.webspace_manager.url_replacer'] : $this->services['sulu_core.webspace.webspace_manager.url_replacer'] = new \Sulu\Component\Webspace\Url\Replacer()) && false ?: '_'}, array('config_dir' => ($this->targetDirs[4].'\\app/Resources/webspaces'), 'cache_dir' => ($this->targetDirs[0].'/sulu'), 'debug' => true, 'cache_class' => 'adminWebspaceCollectionCache', 'base_class' => 'WebspaceCollection')));

return $instance;