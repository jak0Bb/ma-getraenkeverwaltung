<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_core.webspace.settings_manager' shared service.

return $this->services['sulu_core.webspace.settings_manager'] = new \Sulu\Component\Webspace\Settings\SettingsManager(${($_ = isset($this->services['sulu_document_manager.session_manager']) ? $this->services['sulu_document_manager.session_manager'] : $this->load('getSuluDocumentManager_SessionManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu.phpcr.session']) ? $this->services['sulu.phpcr.session'] : $this->getSulu_Phpcr_SessionService()) && false ?: '_'});
