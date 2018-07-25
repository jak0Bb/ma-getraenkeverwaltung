<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_contact.smart_content.data_provider.contact' shared service.

return $this->services['sulu_contact.smart_content.data_provider.contact'] = new \Sulu\Component\Contact\SmartContent\ContactDataProvider(${($_ = isset($this->services['sulu_contact.contact_manager']) ? $this->services['sulu_contact.contact_manager'] : $this->load('getSuluContact_ContactManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer']) ? $this->services['jms_serializer'] : $this->load('getJmsSerializerService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_contact.reference_store.contact']) ? $this->services['sulu_contact.reference_store.contact'] : $this->services['sulu_contact.reference_store.contact'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore()) && false ?: '_'});