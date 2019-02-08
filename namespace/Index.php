<?php
ini_set("display_errors", 1);
spl_autoload_register(
    function ($className) {
        $name = str_replace("\\", "/", $className);
        include_once  $name. '.php';
    }
);

use Classes\Person;
// use Classes\Database;
use Classes\Secondry\Person as secondryPerson;
use Classes\Secondry\Database as secondryDB;

$obj1 = new Person();
// $obj2 = new Database();
$obj3 = new secondryPerson();
$obj4 = new secondryDB();
?>