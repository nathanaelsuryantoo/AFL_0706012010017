<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = ['house_id', 'luas_tanah','luas_bangunan','kamar_tidur','kamar_mandi','harga', 'gambar'];
    protected $table = 'house';
    protected $keyType = 'string';
    protected $primaryKey = "house_id";
    public function lessee(){
        return $this->hasMany(Lessee::class, 'rented_house', 'house_id');
    }
}
