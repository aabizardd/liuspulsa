<?php

namespace App\Http\Controllers;

use App\Models\ProdukModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {

        $this->ProdukModel = new ProdukModel();
    }

    public function index(Request $request, $id_produk = null)
    {

        $search = $request->input('barang');

        $products = "";
        if ($search) {
            $keterangan = "Semua Produk <b>" . strtoupper($search) . "</b>";
            $products = $this->ProdukModel->get_like('tb_barang', 'nama_barang', $search);
        } else {
            if (is_null($id_produk)) {
                $keterangan = "Semua Produk";
                $products = $this->ProdukModel->getAll('tb_barang');
            } else {

                $produk = $this->ProdukModel->getNameProduct($id_produk);
                // dd($produk);
                if (is_null($produk)) {
                    return redirect('/product')->with(['error' => 'Data Tidak Ditemukan']);
                }

                $keterangan = "<b>" . strtoupper($produk->nama_produk) . "</b>";
                $products = $this->ProdukModel->get_where('tb_barang', ['id_produk' => $id_produk]);
            }
        }
        // dd(count($products));

        $data = [
            'keterangan_produk' => $keterangan,
            'products' => $products,
            'kategori_produk' => $this->ProdukModel->getKategoriProductCount(),
            'count_barang' => $this->ProdukModel->getCountAll('tb_barang'),
        ];

        return view('v_product', $data);

    }

}