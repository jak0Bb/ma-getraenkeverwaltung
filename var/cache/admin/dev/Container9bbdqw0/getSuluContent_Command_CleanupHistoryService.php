<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_content.command.cleanup_history' shared service.

return $this->services['sulu_content.command.cleanup_history'] = new \Sulu\Bundle\ContentBundle\Command\CleanupHistoryCommand(${($_ = isset($this->services['sulu.phpcr.session']) ? $this->services['sulu.phpcr.session'] : $this->getSulu_Phpcr_SessionService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.decorated_default_session']) ? $this->services['sulu_document_manager.decorated_default_session'] : $this->getSuluDocumentManager_DecoratedDefaultSessionService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_document_manager.decorated_live_session']) ? $this->services['sulu_document_manager.decorated_live_session'] : $this->getSuluDocumentManager_DecoratedLiveSessionService()) && false ?: '_'});
