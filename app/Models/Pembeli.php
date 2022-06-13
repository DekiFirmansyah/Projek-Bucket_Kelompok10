<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $table='pembeli';

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'email',
        'alamat',
        'no_telp',
        'foto'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function transaksi(){
        return $this->belongsToMany(Transaksi::class);
    }
}
