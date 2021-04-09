<?php

namespace Core\Exceptions;

use Exception;
use Throwable;

class ModuleProviderAlreadyRegisteredException extends Exception
{
    public function __construct(string $moduleProvider)
    {
        parent::__construct(
            "There was already a instance of $moduleProvider registered to eventos.",
            0,
            null)
        ;
    }
}
