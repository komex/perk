<?php
/**
 * This file is a part of p-query project.
 *
 * (c) Andrey Kolchenko <andrey@kolchenko.me>
 */

namespace PQuery\Filter\Type;

use PQuery\Element\ClassElement;

/**
 * Class ClassTypeFilter
 *
 * @package PQuery\Filter\Type
 * @author Andrey Kolchenko <andrey@kolchenko.me>
 */
class ClassTypeFilter extends \FilterIterator
{
    /**
     * Check whether the current element of the iterator is acceptable
     *
     * @link http://php.net/manual/en/filteriterator.accept.php
     * @return bool true if the current element is acceptable, otherwise false.
     */
    public function accept()
    {
        return ($this->getInnerIterator()->current() instanceof ClassElement);
    }
}
