<?php

namespace Safe;

use Safe\Exceptions\FunchandException;

/**
 * Creates an anonymous function from the parameters passed, and
 * returns a unique name for it.
 * 
 * @param string $args The function arguments.
 * @param string $code The function code.
 * @return string Returns a unique function name as a string.
 * @throws FunchandException
 * 
 */
function create_function(string $args, string $code): string
{
    error_clear_last();
    $result = \create_function($args, $code);
    if ($result === false) {
        throw FunchandException::createFromPhpError();
    }
    return $result;
}


/**
 * 
 * 
 * @param callable(): void $function The function to register.
 * @param mixed $args 
 * @throws FunchandException
 * 
 */
function register_tick_function(callable $function,  $args): void
{
    error_clear_last();
    $result = \register_tick_function($function, $args);
    if ($result === false) {
        throw FunchandException::createFromPhpError();
    }
}


