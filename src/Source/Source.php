<?php

declare(strict_types=1);

namespace Quotes\Source;

use Quotes\Author;

interface Source
{
    /**
     * @return string[]
     */
    public function all() : array;
    public function author() : Author;
}
