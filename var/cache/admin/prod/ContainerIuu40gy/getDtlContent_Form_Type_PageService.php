<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'dtl_content.form.type.page' shared service.

return $this->services['dtl_content.form.type.page'] = new \Sulu\Bundle\ContentBundle\Form\Type\PageDocumentType(${($_ = isset($this->services['sulu.phpcr.session']) ? $this->services['sulu.phpcr.session'] : $this->getSulu_Phpcr_SessionService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.document_manager']) ? $this->services['sulu_document_manager.document_manager'] : $this->load('getSuluDocumentManager_DocumentManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.metadata_factory']) ? $this->services['sulu_document_manager.metadata_factory'] : $this->getSuluDocumentManager_MetadataFactoryService()) && false ?: '_'});
