<?php

declare(strict_types=1);

namespace Quotes;

use Quotes\Renderer\Renderable;

/**
 * Text that can be attributed to an author.
 */
interface Attributable extends Renderable
{
    public function getText() : string;
    public function getAuthor() : Author;
}
