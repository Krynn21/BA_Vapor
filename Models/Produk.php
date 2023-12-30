<?php
require_once('Model.php');

class Produk extends Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'produk';
    }

    public function getprodukbaru()
    {
        $query = "SELECT * FROM {$this->table} ORDER BY created_at DESC LIMIT 4";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>