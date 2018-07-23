<?php

/*
 * This file is part of the MassiveSearchBundle
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Massive\Bundle\SearchBundle\Search\Decorator;

use Massive\Bundle\SearchBundle\Search\Document;
use Massive\Bundle\SearchBundle\Search\Metadata\IndexMetadataInterface;

/**
 * Describes the interface to be used for index name decorators.
 */
interface IndexNameDecoratorInterface
{
    /**
     * Adds some decoration to the index name.
     *
     * @param IndexMetadataInterface $indexMetadata The metadata for the index
     * @param Document $document The document for which the decoration is done
     *
     * @return string
     */
    public function decorate(IndexMetadataInterface $indexMetadata, $object, Document $document);

    /**
     * Removes the added decoration from the decorate method.
     *
     * @param string $decoratedIndexName The decorated index name
     *
     * @return string
     */
    public function undecorate($decoratedIndexName);

    /**
     * Checks if the index name can be decorated to the decorated index name by this decorator.
     *
     * @param string $indexName The undecorated index name
     * @param string $decoratedIndexName The given, decorated index name
     * @param array $options Additional options
     *
     * @return bool
     */
    public function isVariant($indexName, $decoratedIndexName, array $options = []);
}
