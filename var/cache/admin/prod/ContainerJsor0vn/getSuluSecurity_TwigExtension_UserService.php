<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_security.twig_extension.user' shared service.

return $this->services['sulu_security.twig_extension.user'] = new \Sulu\Bundle\SecurityBundle\Twig\UserTwigExtension(${($_ = isset($this->services['sulu_security.twig_extension.user.cache']) ? $this->services['sulu_security.twig_extension.user.cache'] : $this->services['sulu_security.twig_extension.user.cache'] = new \Doctrine\Common\Cache\ArrayCache()) && false ?: '_'}, ${($_ = isset($this->services['sulu.repository.user']) ? $this->services['sulu.repository.user'] : $this->getSulu_Repository_UserService()) && false ?: '_'});
