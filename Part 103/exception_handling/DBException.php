<?php
/**
 * Define a custom exception class
 */
class DBException extends Exception
{
    public function __construct($message, $code = 0, Exception $previous = null) 
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString() 
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function RecoveryFunction() 
    {
    }
}
class DBSanitizeException extends DBException
{
    public function __construct($message, $code = 0, Exception $previous = null) 
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString() 
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function RecoveryFunction() 
    {
    }
}
class DBQueryException extends DBException
{
    public function __construct($message, $code = 0, Exception $previous = null) 
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString() 
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function RecoveryFunction() 
    {
    }
}
?>

