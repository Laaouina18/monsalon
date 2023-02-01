<?php
class Rendez_vous{
    private $conn;
    private $table = 'rendez_vous';
    public $id;
    public $idclient;
    public $heur;
    public $stat;
    public function __construct($db){
        $this->conn = $db;
    }
    public function read(){
        $query = 'SELECT *  from rendez_vous inner join client where rendez_vous.idclient=client.id';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}