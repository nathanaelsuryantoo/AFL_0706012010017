<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessee extends Model
{
    use HasFactory;
    protected $fillable=['nik','nama','jenis_kelamin','umur','rented_house','rent_from','rent_until'];
    protected $table = "lessee";
    protected $primaryKey = "nik";
    public function house(){
        return $this->belongsTo(House::class, 'rented_house', 'house_id');
    }
}
