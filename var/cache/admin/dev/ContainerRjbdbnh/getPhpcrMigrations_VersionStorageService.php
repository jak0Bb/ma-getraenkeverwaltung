<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'phpcr_migrations.version_storage' shared service.

return $this->services['phpcr_migrations.version_storage'] = new \PHPCR\Migrations\VersionStorage(${($_ = isset($this->services['sulu_document_manager.decorated_default_session']) ? $this->services['sulu_document_manager.decorated_default_session'] : $this->getSuluDocumentManager_DecoratedDefaultSessionService()) && false ?: '_'}, 'jcr:versions');