<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2017 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Component\Routing\NestedMatcher;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RouteCollection;

/**
 * A FinalMatcher returns only one route from a collection of candidate routes.
 *
 * @author Larry Garfield
 * @author David Buchmann
 */
interface FinalMatcherInterface
{
    /**
     * Matches a request against a route collection and returns exactly one result.
     *
     * @param RouteCollection $collection The collection against which to match
     * @param Request         $request    The request to match
     *
     * @return array An array of parameters
     *
     * @throws ResourceNotFoundException if none of the routes in $collection
     *                                   matches $request
     * @throws MethodNotAllowedException If the resource was found but the request method is not allowed
     */
    public function finalMatch(RouteCollection $collection, Request $request);
}
