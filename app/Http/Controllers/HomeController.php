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
            'products_pulsa' => $this->ProdukModel->getProdukSampel(),
        ];

        // dd($data['products_pulsa']);

        return view('v_home', $data);
    }

}