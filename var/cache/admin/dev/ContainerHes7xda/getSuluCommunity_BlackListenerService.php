<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_community.black_listener' shared service.

return $this->services['sulu_community.black_listener'] = new \Sulu\Bundle\CommunityBundle\EventListener\BlacklistListener(${($_ = isset($this->services['sulu_community.blacklisting.item_repository']) ? $this->services['sulu_community.blacklisting.item_repository'] : $this->load('getSuluCommunity_Blacklisting_ItemRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_security.token_generator']) ? $this->services['sulu_security.token_generator'] : $this->services['sulu_security.token_generator'] = new \Sulu\Bundle\SecurityBundle\Util\TokenGenerator()) && false ?: '_'}, ${($_ = isset($this->services['sulu_community.mail_factory']) ? $this->services['sulu_community.mail_factory'] : $this->load('getSuluCommunity_MailFactoryService.php')) && false ?: '_'});
