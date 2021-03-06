<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_security.profile_controller' shared service.

return $this->services['sulu_security.profile_controller'] = new \Sulu\Bundle\SecurityBundle\Controller\ProfileController(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['fos_rest.view_handler']) ? $this->services['fos_rest.view_handler'] : $this->load('getFosRest_ViewHandlerService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_security.user_setting_repository']) ? $this->services['sulu_security.user_setting_repository'] : $this->load('getSuluSecurity_UserSettingRepositoryService.php')) && false ?: '_'});
