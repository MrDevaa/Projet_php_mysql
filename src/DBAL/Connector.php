<?php

namespace Narut\Projectphp\DBAL;

class Connector
{
    const DSN = "mysql:dbname=cine;host=localhost";

    public \PDO $dbh;

    public function __construct() 
    {
        $this->dbh = new \PDO(self::DSN, 'root', '');
    }
}

?>