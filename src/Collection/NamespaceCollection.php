<?php
/**
 * This file is a part of p-query project.
 *
 * (c) Andrey Kolchenko <andrey@kolchenko.me>
 */

namespace PQuery\Collection;

use PQuery\Filter\Type\NamespaceTypeFilter;

/**
 * Class NamespaceCollection
 *
 * @package PQuery\Collection
 * @author Andrey Kolchenko <andrey@kolchenko.me>
 */
class NamespaceCollection extends AbstractCollection
{
    /**
     * @param \ArrayIterator $elements
     */
    public function __construct(\ArrayIterator $elements)
    {
        $this->elements = new NamespaceTypeFilter($elements);
    }
}
