<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_core.rest.view_handler.csv' shared service.

return $this->services['sulu_core.rest.view_handler.csv'] = new \Sulu\Component\Rest\Csv\CsvHandler(${($_ = isset($this->services['jms_serializer']) ? $this->services['jms_serializer'] : $this->load('getJmsSerializerService.php')) && false ?: '_'});
