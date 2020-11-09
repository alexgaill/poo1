<?php

class Autoloader{
    public function autoload($class){
        $class = str_replace("\\","/", $class);
        require $class.".php";
    }

    public function register(){
        spl_autoload_register(array(__CLASS__,"autoload"));
    }
}