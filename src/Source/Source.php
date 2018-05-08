<?php

declare(strict_types=1);

namespace Quotes\Source;

use Quotes\Quote;
use Quotes\Strategy\Strategy;

interface Source
{
    public function retrieve(Strategy $strategy) : Quote;
}
