<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fragment.renderer.esi' shared service.

$this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(${($_ = isset($this->services['esi']) ? $this->services['esi'] : $this->services['esi'] = new \Symfony\Component\HttpKernel\HttpCache\Esi()) && false ?: '_'}, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->load('getFragment_Renderer_InlineService.php')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt')) && false ?: '_'});

$instance->setFragmentPath('/_fragment');

return $instance;
