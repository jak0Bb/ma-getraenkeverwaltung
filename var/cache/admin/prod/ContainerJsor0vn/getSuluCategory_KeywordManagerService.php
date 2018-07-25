<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_category.keyword_manager' shared service.

return $this->services['sulu_category.keyword_manager'] = new \Sulu\Bundle\CategoryBundle\Category\KeywordManager(${($_ = isset($this->services['sulu.repository.keyword']) ? $this->services['sulu.repository.keyword'] : $this->load('getSulu_Repository_KeywordService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu.repository.category_translation']) ? $this->services['sulu.repository.category_translation'] : $this->load('getSulu_Repository_CategoryTranslationService.php')) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
