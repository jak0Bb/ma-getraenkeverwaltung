<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'massive_search.metadata.driver.chain' shared service.

return $this->services['massive_search.metadata.driver.chain'] = new \Metadata\Driver\DriverChain(array(0 => ${($_ = isset($this->services['massive_search.metadata.driver.xml']) ? $this->services['massive_search.metadata.driver.xml'] : $this->load('getMassiveSearch_Metadata_Driver_XmlService.php')) && false ?: '_'}));