<?php

namespace Quotes;

interface QuoteSource
{
    public function retrieve() : Quote;
}
