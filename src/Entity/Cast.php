<?php

namespace Narut\Projectphp\Entity;

class Cast {

    private \PDO $connector;

    public function __construct(\PDO $connector) 
    {
        $this->connector = $connector;
    }

    public function getCast(): array {
        // Récupère le cast complet avec tous les firstName et lastName
        $sql = "SELECT * FROM cast";
        $statement = $this->connector->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    public function getCastByFilmAndCastId($idFilm = null, $idCast = null): array {
        // Construit la requête SQL en fonction des filtres idFilm et idCast
        $sql = "SELECT * FROM cast WHERE 1=1"; // 1=1 pour simplifier l'ajout des conditions
        $params = [];

        if ($idFilm !== null) {
            $sql .= " AND idFilm = :idFilm";
            $params[':idFilm'] = $idFilm;
        }

        if ($idCast !== null) {
            $sql .= " AND idCast = :idCast";
            $params[':idCast'] = $idCast;
        }

        $statement = $this->connector->prepare($sql);
        foreach ($params as $key => $value) {
            $statement->bindValue($key, $value, \PDO::PARAM_INT);
        }
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}
?>
