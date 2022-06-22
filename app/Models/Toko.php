<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;
    protected $table='toko';

    protected $fillable = [
        'user_id',
        'nama_toko',
        'alamat',
        'email',
        'no_telp'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function transaksi(){
        return $this->belongsToMany(Transaksi::class);
    }
}
