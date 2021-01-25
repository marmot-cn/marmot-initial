<?php
namespace {@namespaceCaps}\Model;

use Marmot\Interfaces\INull;

class Null{@nameCaps} extends {@nameCaps} implements INull
{
    protected static $instance;
    
    public static function &getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
