<?php

/*
 * This file is part of the MassiveSearchBundle
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Massive\Bundle\SearchBundle\Search\Converter;

/**
 * Interface for converter manager.
 */
interface ConverterManagerInterface
{
    /**
     * Converts value from a source format to a
     * indexable format.
     *
     * @param mixed $value
     * @param string $from source format
     *
     * @return mixed
     */
    public function convert($value, $from);

    /**
     * Returns true if a converter exists which
     * converts from source to a indexable format.
     *
     * @param string $from source format
     *
     * @return bool
     */
    public function hasConverter($from);
}
