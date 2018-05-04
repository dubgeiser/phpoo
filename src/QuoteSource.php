<?php

declare(strict_types=1);

namespace Quotes;

interface QuoteSource
{
    public function retrieve(QuoteStrategy $strategy) : Quote;
}
