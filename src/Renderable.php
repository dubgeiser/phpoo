<?php

declare(strict_types=1);

namespace Quotes;

interface Renderable
{
    public function __toString() : string;
}
