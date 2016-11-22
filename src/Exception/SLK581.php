<?php

namespace SLK581\Exception;

use Exception;

class SLK581 extends Exception
{
    public function __construct($message = '')
    {
        parent::__construct(sprintf('SLK581 Error: %s', $message));
    }
}
