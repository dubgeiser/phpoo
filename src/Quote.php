<?php

declare(strict_types=1);

namespace Quotes;

use Quotes\Renderer\Renderable;

interface Quote extends Renderable
{
    public function getText() : string;
    public function getAuthor() : Author;
}
