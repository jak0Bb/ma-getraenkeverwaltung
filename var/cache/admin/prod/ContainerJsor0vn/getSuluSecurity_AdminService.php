<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_security.admin' shared service.

return $this->services['sulu_security.admin'] = new \Sulu\Bundle\SecurityBundle\Admin\SecurityAdmin(${($_ = isset($this->services['sulu_security.security_checker']) ? $this->services['sulu_security.security_checker'] : $this->getSuluSecurity_SecurityCheckerService()) && false ?: '_'}, 'Sulu');