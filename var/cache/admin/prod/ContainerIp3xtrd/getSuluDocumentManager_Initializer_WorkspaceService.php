<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_document_manager.initializer.workspace' shared service.

return $this->services['sulu_document_manager.initializer.workspace'] = new \Sulu\Bundle\DocumentManagerBundle\Initializer\WorkspaceInitializer(${($_ = isset($this->services['doctrine_phpcr']) ? $this->services['doctrine_phpcr'] : $this->load('getDoctrinePhpcrService.php')) && false ?: '_'});