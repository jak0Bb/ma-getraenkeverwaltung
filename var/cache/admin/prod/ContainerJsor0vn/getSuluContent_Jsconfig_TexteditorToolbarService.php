<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_content.jsconfig.texteditor_toolbar' shared service.

return $this->services['sulu_content.jsconfig.texteditor_toolbar'] = new \Sulu\Bundle\ContentBundle\Admin\TextEditorJsConfig(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});
