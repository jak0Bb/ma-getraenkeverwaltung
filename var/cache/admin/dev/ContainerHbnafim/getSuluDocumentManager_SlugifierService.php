<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_document_manager.slugifier' shared service.

return $this->services['sulu_document_manager.slugifier'] = new \Symfony\Cmf\Api\Slugifier\CallbackSlugifier('Ferrandini\\Urlizer::urlize');
