<?php
namespace Classes\Secondry;
include '../Database.php';
use Classes\Database as firstDb;

class Database
{
    public function __construct()
    {
        echo "Secondry Database class call<br>";
        $fdb = new firstDb();
    }
}
?>