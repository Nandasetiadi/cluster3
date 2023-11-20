<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function utama()
    {
        $produk = DB::table('tokoline')->get();
        return view('produk-client',['produk' => $produk]);
    }

    public function index(){
        $produk = DB::table('tokoline')->get();
        return view('produk',['produk' => $produk]);
    }

    public function home(){
        $produk = DB::table('tokoline')->get();
        return view('home',['produk' => $produk]);
    }


    public function tambah(){
        return view('tambahproduk');
    }

    public function store(Request$request){
        DB::table('tokoline')->insert([
            'kode_produk'=>$request->kode_produk,
            'nama_produk'=>$request->nama_produk,
            'tipe_produk'=>$request->tipe_produk,  
            'harga_produk'=>$request->harga_produk,
            'stok_produk'=>$request->stok_produk,
            'foro' => $request->foto
        ]);
        return redirect('/produk');
    }
}
