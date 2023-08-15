<?php

namespace App\Exceptions;

use Exception;

class BaseException extends Exception
{
    //
    public function __construct(int $code = 0, string $message = "", ?Throwable $previous = null)
    {
        $error = ['404' => 'not found', '401' => 'token失效', '422' => '数据不对'];
        if ($message == '') $message = $error[$code];
        parent::__construct($message, $code, $previous);
    }
}
