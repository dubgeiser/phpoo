<?php

namespace Quotes;

interface QuoteSource
{
    public function getRandomQuote() : Quote;
}
