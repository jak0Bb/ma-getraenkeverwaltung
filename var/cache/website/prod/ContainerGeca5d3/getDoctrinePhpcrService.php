<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_phpcr' shared service.

$this->services['doctrine_phpcr'] = $instance = new \Doctrine\Bundle\PHPCRBundle\ManagerRegistry('PHPCR', $this->parameters['doctrine_phpcr.sessions'], array(), 'live', '', 'Doctrine\\Common\\Proxy\\Proxy');

$instance->setContainer($this);

return $instance;
