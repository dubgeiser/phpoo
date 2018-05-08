<?php

declare(strict_types=1);

namespace Quotes\Renderer;

interface Renderable
{
    public function __toString() : string;
}
