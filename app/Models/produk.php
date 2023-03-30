<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $table ='Produk';

    protected $fillable =[
        'nama',
        'deskripsi',
        'harga',
        'stok'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
