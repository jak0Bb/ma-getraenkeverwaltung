<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_content.export_twig_extension' shared service.

return $this->services['sulu_content.export_twig_extension'] = new \Sulu\Bundle\ContentBundle\Twig\ExportTwigExtension(${($_ = isset($this->services['sulu_content.export.manager']) ? $this->services['sulu_content.export.manager'] : $this->load('getSuluContent_Export_ManagerService.php')) && false ?: '_'});
