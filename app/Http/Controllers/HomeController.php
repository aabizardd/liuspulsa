<?php

namespace App\Http\Controllers;

use App\Models\ProdukModel;

class HomeController extends Controller
{
    //

    public function __construct()
    {

        $this->ProdukModel = new ProdukModel();
    }

    public function index()
    {
        $data = [
            'products' => $this->ProdukModel->getAll('tb_produk'),
            'products_pulsa' => $this->ProdukModel->get_where_limit('tb_barang', ['id_produk' => 1], 8),
        ];

        // dd($data['products_pulsa']);

        return view('v_home', $data);
    }

}