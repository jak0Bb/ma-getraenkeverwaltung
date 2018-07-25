<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_security.access_control_manager' shared service.

$a = ${($_ = isset($this->services['sulu_security.mask_converter']) ? $this->services['sulu_security.mask_converter'] : $this->load('getSuluSecurity_MaskConverterService.php')) && false ?: '_'};

$this->services['sulu_security.access_control_manager'] = $instance = new \Sulu\Component\Security\Authorization\AccessControl\AccessControlManager($a, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});

$instance->addAccessControlProvider(new \Sulu\Component\Security\Authorization\AccessControl\PhpcrAccessControlProvider(${($_ = isset($this->services['sulu_document_manager.document_manager']) ? $this->services['sulu_document_manager.document_manager'] : $this->load('getSuluDocumentManager_DocumentManagerService.php')) && false ?: '_'}, $this->parameters['permissions']));
$instance->addAccessControlProvider(new \Sulu\Component\Security\Authorization\AccessControl\DoctrineAccessControlProvider(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.repository.role']) ? $this->services['sulu.repository.role'] : $this->load('getSulu_Repository_RoleService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu.repository.access_control']) ? $this->services['sulu.repository.access_control'] : $this->load('getSulu_Repository_AccessControlService.php')) && false ?: '_'}, $a));

return $instance;
