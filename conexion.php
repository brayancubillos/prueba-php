<?php

require 'database.class.php';
class MyDatabase extends database{
    //put your code here
    public function __construct() {
        $config = array();
        $config[parent::HOST] = 'localhost';
        $config[parent::DATABASE] = 'test'; //id6199421_
        $config[parent::USER] = 'root';//id6199421_productiva
        $config[parent::PASSWORD] = '';//productiva1234
        parent::__construct($config);
    }
}

?>