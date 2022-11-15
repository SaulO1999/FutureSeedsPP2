<?php
include("connection.php");

class Patrocinador {
    protected $conn;
    protected $data = array();

    function __construct() {
    $db = new dbObj();
    $connString =  $db->getConnstring();
    $this->conn = $connString;
    }

    public function getPatrocinador() {
        $sql = "SELECT * FROM patrocinador";
        $queryRecords = pg_query($this->conn, $sql) or die("Error de consulta a patrocinadores");
        $data = pg_fetch_all($queryRecords);
        return $data;
    }

    public function filterPatrocinador($filtro){
        $sql = "SELECT * FROM patrocinador WHERE nombre_publico_empresa LIKE '%$filtro%'";
        $queryRecords = pg_query($this->conn, $sql) or die("Error de consulta a patrocinadores");
        $data = pg_fetch_all($queryRecords);
        return $data;
    }
}

class Proyecto{
    protected $conn;
    protected $data = array();

    function __construct() {
    $db = new dbObj();
    $connString =  $db->getConnstring();
    $this->conn = $connString;
    }

    public function filterProyecto($filtro){
        $sql = "SELECT * FROM proyecto WHERE nombre_proyecto LIKE '%$filtro%'";
        $queryRecords = pg_query($this->conn, $sql) or die("Error de consulta a patrocinadores");
        $data = pg_fetch_all($queryRecords);
        return $data;
    }
}
?>