<?php

namespace Vladimirsannikov\Bracketchecker;

use Exception;

class EmptyBracketSequenceException extends Exception
{

    public function __construct()
    {
        parent::__construct();
        $this->message = "Пустая скобочная последовательность";
    }
}
