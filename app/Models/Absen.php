<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    protected $table = "Absen";
    protected $primarykey = "id";
    protected $fillable = ['karyawan_id','bulan','tahun','jumlah_masuk'];

    // public function dataKaryawan(){
    //     return $this->hasOne(Karyawan::class,'id','karyawan_id');   
    // }
}
