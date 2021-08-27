<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProdukModel extends Model
{

    public function getAll($table)
    {
        return DB::table($table)->get();
    }

    public function get_where_limit($table, $where, $limit)
    {
        $data = DB::table($table)
            ->where($where)
            ->limit($limit)
            ->get();

        return $data;
    }

    public function get_like($table, $column, $data)
    {
        $data = DB::table($table)
            ->where($column, 'LIKE', "%$data%")
            ->get();

        return $data;

    }

    public function getCountAll($table)
    {
        $count = DB::table($table)->count();

        return $count;

    }

    public function getKategoriProductCount()
    {

        $data = DB::table('tb_produk')
            ->leftJoin('tb_barang', 'tb_produk.id_produk', '=', 'tb_barang.id_produk')
            ->select(DB::raw('count(tb_barang.id_barang) as total, nama_produk, tb_produk.id_produk'))
            ->groupBy('tb_produk.id_produk')
            ->get();

        return $data;

    }

    public function get_where($table, $where)
    {
        $data = DB::table($table)
            ->where($where)
            ->get();

        return $data;

    }

    public function getNameProduct($id)
    {
        $name = DB::table('tb_produk')->where('id_produk', $id)->first();

        return $name;

    }
}