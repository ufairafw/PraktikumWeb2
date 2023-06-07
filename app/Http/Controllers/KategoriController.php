<?php

namespace App\Http\Controllers;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index ()
    {
        // ambil data produk dari database
        $kategori_produk = KategoriProduk::
        select('kategori_produk.nama')
        ->get();

        // kirim data ke view
        return view('admin.produk.kategori', compact('kategori_produk'));
    }
}
