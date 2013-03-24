<?php 
class Autoloader {
    public function __construct() {
        //Регистрация автозагрузчика
        spl_autoload_register(array($this, 'load'));
    }
    public function load($className) {
        if(substr($className,0,10) == 'controller' || substr($className,0,5) == 'model') {
            require DOCUMENT_ROOT.'/application/controllers/'.$className.'.php';
        } else {
            set_include_path(dirname(__FILE__));
            @include_once $className . '.php';
        }
    }
} ?>