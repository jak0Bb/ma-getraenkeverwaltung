<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu.content.type.text_editor' shared service.

return $this->services['sulu.content.type.text_editor'] = new \Sulu\Component\Content\Types\TextEditor('SuluContentBundle:Template:content-types/text_editor.html.twig', ${($_ = isset($this->services['sulu_markup.parser']) ? $this->services['sulu_markup.parser'] : $this->getSuluMarkup_ParserService()) && false ?: '_'});
