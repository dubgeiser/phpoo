<?php

namespace Quotes;

interface QuoteSource
{
    public function retrieve(QuoteStrategy $strategy) : Quote;
}
