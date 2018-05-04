<?php

namespace Test\Quotes;

use PHPUnit\Framework\TestCase;
use Quotes\Author;


class AuthorTest extends TestCase
{
    public function testToString()
    {
        $a = new Author('Per');
        $this->assertEquals('Per', (string) $a);
    }

    /**
     * @expectedException Quotes\AuthorNameLengthError
     */
    public function testTooShortNameThrowsException()
    {
        $a = new Author("");
    }

    /**
     * @expectedException Quotes\AuthorNameLengthError
     */
    public function testTooLongNameThrowsException()
    {
        $a = new Author('xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
    }
}
