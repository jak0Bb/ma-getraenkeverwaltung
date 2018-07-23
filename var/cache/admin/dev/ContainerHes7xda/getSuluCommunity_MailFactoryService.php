<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_community.mail_factory' shared service.

return $this->services['sulu_community.mail_factory'] = new \Sulu\Bundle\CommunityBundle\Mail\MailFactory(${($_ = isset($this->services['swiftmailer.mailer.default']) ? $this->services['swiftmailer.mailer.default'] : $this->load('getSwiftmailer_Mailer_DefaultService.php')) && false ?: '_'}, ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->load('getTemplatingService.php')) && false ?: '_'}, ${($_ = isset($this->services['sulu_website.translator.request_analyzer']) ? $this->services['sulu_website.translator.request_analyzer'] : $this->getSuluWebsite_Translator_RequestAnalyzerService()) && false ?: '_'});
