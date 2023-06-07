<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Hubungin dengan tabel produk
    protected $table = 'produk';

    // Matiin fitur timestamps
    public $timestamps = false;

    // Tentuin kolom-kolom yang bisa diisi
    protected $fillable = [
        'kode',
        'nama',
        'harga_jual',
        'harga_beli',
        'stok',
        'min_stok',
        'deskripsi',
        'kategori_produk_id',
    ];

    // Buat fungsi relasi ke kategoriproduk
    public function kategori_produk(){
        return $this->belongsTo(KategoriProduk::class);
    }
}