<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_contact.smart_content.data_provider.account' shared service.

return $this->services['sulu_contact.smart_content.data_provider.account'] = new \Sulu\Component\Contact\SmartContent\AccountDataProvider(${($_ = isset($this->services['sulu_contact.account_manager']) ? $this->services['sulu_contact.account_manager'] : $this->load('getSuluContact_AccountManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer']) ? $this->services['jms_serializer'] : $this->load('getJmsSerializerService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_contact.reference_store.account']) ? $this->services['sulu_contact.reference_store.account'] : $this->services['sulu_contact.reference_store.account'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore()) && false ?: '_'});
