<?php
require_once 'Models/Kategori.php';
require_once 'Models/Produk.php';
class HomeController
{
    private $kategoriModel;
    private $produkModel;
    public function __construct()
    {
        $this->kategoriModel = new Kategori();
        $this->produkModel = new Produk();
    }

    public function index()
    {
        if (isset($_SESSION['role_user']) && $_SESSION['role_user'] === 1) {
            $kategoris = $this->kategoriModel->findAll();
            $produks = $this->produkModel->findAll();
            view("dashboard/index", ['produks' => $produks, 'kategoris' => $kategoris, 'page' => 'dashboard']);
        } else {
            $kategoriModel = new Kategori();
            $kategoris = $kategoriModel->findAll();

            $produkModel = new Produk();
            $produks = $produkModel->findAll();
            view("public/index", ['produks' => $produks, 'kategoris' => $kategoris]);
        }
    }
    public function profile()
    {
        view("public/profile");
    }
}
?>