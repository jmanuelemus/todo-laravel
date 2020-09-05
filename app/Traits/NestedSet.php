<?php

namespace App\Traits;

use Kalnoy\Nestedset\NodeTrait;

trait NestedSet
{
    use NodeTrait;

    /**
     * Get the parent id key name.
     * 
     * @return string
     */
    public function getParentIdName()
    {
        return '_sup';
    }
}
