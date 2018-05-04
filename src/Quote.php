<?php

namespace Trump;

interface Quote extends Renderable
{
    public function getMessage();
    public function getAuthor();
}
