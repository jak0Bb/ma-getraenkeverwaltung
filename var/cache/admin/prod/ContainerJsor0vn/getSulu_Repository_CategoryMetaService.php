<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu.repository.category_meta' shared service.

$a = ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'};

return $this->services['sulu.repository.category_meta'] = new \Sulu\Bundle\CategoryBundle\Entity\CategoryMetaRepository($a, $a->getClassMetadata('Sulu\\Bundle\\CategoryBundle\\Entity\\CategoryMeta'));
