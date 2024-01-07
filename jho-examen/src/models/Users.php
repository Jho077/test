<?php

namespace Daw;

class Users{

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll() {
        $selectStmt = $this->sql->prepare('SELECT * FROM users');
        $selectStmt->execute();
        $result = $selectStmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
        }

    public function register($nom, $cognom, $datanaix, $carrer, $telefon, $ciutat, $codip, $grup){
        $stm = $this->sql->prepare('INSERT INTO users (nom, cognom, datanaix, carrer, telefon, ciutat, codip, grup) VALUES (:nom, :cognom, :datanaix, :carrer, :telefon, :ciutat, :codip, :grup)');
        $stm->execute([
            ':nom' => $nom,
            ':cognom' => $cognom,
            ':datanaix' => $datanaix,
            ':carrer' => $carrer,
            ':telefon' => $telefon,
            ':ciutat' => $ciutat,
            ':codip' => $codip,
            ':grup' => $grup
        ]);
        $lastInsertId = $this->sql->lastInsertId();
    
        return $lastInsertId;
    }

}

