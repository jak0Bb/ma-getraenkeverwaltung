<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_contact.customer_manager' shared service.

return $this->services['sulu_contact.customer_manager'] = new \Sulu\Bundle\ContactBundle\Contact\CustomerManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['sulu_contact.util.id_converter']) ? $this->services['sulu_contact.util.id_converter'] : $this->services['sulu_contact.util.id_converter'] = new \Sulu\Bundle\ContactBundle\Util\CustomerIdConverter()) && false ?: '_'}, ${($_ = isset($this->services['sulu_contact.util.index_comparator']) ? $this->services['sulu_contact.util.index_comparator'] : $this->services['sulu_contact.util.index_comparator'] = new \Sulu\Bundle\ContactBundle\Util\IndexComparator()) && false ?: '_'}, 'SuluContactBundle:Contact', 'SuluContactBundle:Account');
