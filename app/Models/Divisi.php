<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    protected $table = "Divisi";
    protected $primarykey = "id";
    protected $fillable = ['unit_kerja','bagian','karyawan_id'];

    // public function dataKaryawan(){
    //     return $this->hasOne(Karyawan::class,'id','karyawan_id');   
    // }
}
