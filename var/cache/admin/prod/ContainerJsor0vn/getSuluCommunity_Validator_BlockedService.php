<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_community.validator.blocked' shared service.

return $this->services['sulu_community.validator.blocked'] = new \Sulu\Bundle\CommunityBundle\Validator\Constraints\BlockedValidator(${($_ = isset($this->services['sulu_community.blacklisting.item_repository']) ? $this->services['sulu_community.blacklisting.item_repository'] : $this->load('getSuluCommunity_Blacklisting_ItemRepositoryService.php')) && false ?: '_'});
