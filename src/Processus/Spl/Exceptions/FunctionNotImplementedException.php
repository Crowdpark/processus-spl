<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hissterkiller
 * Date: 11/13/12
 * Time: 2:07 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Spl\Exceptions;

class FunctionNotImplementedException extends \Exception
{
    public function __construct($message = "", $code = 0, \Exception $previous = null)
    {
        $message = "Function not implemented in this Class.";
        parent::__construct($message, $code, $previous);
    }

}
