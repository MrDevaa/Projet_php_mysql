<?php

namespace Narut\Projectphp\Entity;

class Cast {

    private \PDO $connector;

    public function __construct(\PDO $connector) 
    {
        $this->connector = $connector;
    }
    
}


?>