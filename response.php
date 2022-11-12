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
}
?>