<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource
     */
    public function index ()
    {
        // ambil data produk dari database
        $produk = Produk::join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk_id')

        // tampilin data
        ->select('produk.*', 'kategori_produk.nama as nama_kategori')
        ->get();

        // kirim data ke view
        return view('admin.produk.produk', compact('produk'));
    } 
    public function create()
    {
        $kategori_produk = KategoriProduk::all();
        $produk = Produk::all();

        // kirim data ke view from create
        return view('admin.produk.create', compact('kategori_produk', 'produk'));
    }

    public function store(Request $request)
    {
        // Membuat tambah data / validasi tambah data
        $produk = new Produk;
        // Kolom kode kita isi dengan input user kode
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        // simpen data
        $produk->save();
        // tampilin view produk
        return redirect('produk');
        
    }  
    public function edit(string $id)
    {
        $kategori_produk = KategoriProduk::all();
        $produk = Produk::where('id', $id)->get();

        // kirim data ke view from edit
        return view('admin.produk.edit', compact('kategori_produk', 'produk'));
    }
    public function update(Request $request)
    {
        // Fitur Edit Data / Validasi Edit Data
        $produk = Produk::find($request->id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        // simpen data
        $produk->save();
        // tampilin view produk
        return redirect('produk');   
    }
    public function destroy($id)
    {
        // Fitur apus data
        $produk = Produk::find($id);
        $produk->delete();

        // Balikin ke halaman produk
        return redirect('produk')->with('success', "Produk berhasil dihapus");     
    }
}


