<?php
class CustomAutoloader{

    public function __construct(){
        spl_autoload_register(array($this, 'loader'));
    }

    public function loader($className){
        if (substr($className, 0, 5) == 'beans')
            require  APPPATH .  str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    }
}
?>