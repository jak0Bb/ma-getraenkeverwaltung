<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_document_manager.decorated_live_session' shared service.

return $this->services['sulu_document_manager.decorated_live_session'] = new \Sulu\Bundle\DocumentManagerBundle\Session\Session(${($_ = isset($this->services['doctrine_phpcr.jackalope.repository.live']) ? $this->services['doctrine_phpcr.jackalope.repository.live'] : $this->load('getDoctrinePhpcr_Jackalope_Repository_LiveService.php')) && false ?: '_'}->login(new \PHPCR\SimpleCredentials('admin', 'admin'), 'default_live'));