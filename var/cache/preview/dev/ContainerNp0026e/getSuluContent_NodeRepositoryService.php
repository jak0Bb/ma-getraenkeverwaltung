<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_content.node_repository' shared service.

return $this->services['sulu_content.node_repository'] = new \Sulu\Bundle\ContentBundle\Repository\NodeRepository(${($_ = isset($this->services['sulu.content.mapper']) ? $this->services['sulu.content.mapper'] : $this->getSulu_Content_MapperService()) && false ?: '_'}, ${($_ = isset($this->services['sulu.phpcr.session']) ? $this->services['sulu.phpcr.session'] : $this->getSulu_Phpcr_SessionService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_security.user_manager']) ? $this->services['sulu_security.user_manager'] : $this->getSuluSecurity_UserManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_core.webspace.webspace_manager']) ? $this->services['sulu_core.webspace.webspace_manager'] : $this->getSuluCore_Webspace_WebspaceManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_content.smart_content.data_provider.content.query_builder']) ? $this->services['sulu_content.smart_content.data_provider.content.query_builder'] : $this->load('getSuluContent_SmartContent_DataProvider_Content_QueryBuilderService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu.content.query_executor']) ? $this->services['sulu.content.query_executor'] : $this->getSulu_Content_QueryExecutorService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_security.access_control_manager']) ? $this->services['sulu_security.access_control_manager'] : $this->load('getSuluSecurity_AccessControlManagerService.php')) && false ?: '_'}, NULL, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
