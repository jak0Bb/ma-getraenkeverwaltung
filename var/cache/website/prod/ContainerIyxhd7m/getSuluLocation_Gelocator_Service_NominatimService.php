<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sulu_location.gelocator.service.nominatim' shared service.

return $this->services['sulu_location.gelocator.service.nominatim'] = new \Sulu\Bundle\LocationBundle\Geolocator\Service\NominatimGeolocator(${($_ = isset($this->services['sulu_location.geolocator.guzzle.client']) ? $this->services['sulu_location.geolocator.guzzle.client'] : $this->services['sulu_location.geolocator.guzzle.client'] = new \GuzzleHttp\Client()) && false ?: '_'}, 'http://open.mapquestapi.com/nominatim/v1/search.php');
