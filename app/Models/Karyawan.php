<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = "karyawan";
    protected $primarykey = "id";
    protected $fillable = ['id','nama','jk','tgl_lahir','alamat','agama','no_hp','pendidikan_terakhir','email','foto','jabatan_id'];


    public function dataJabatan(){
        return $this->hasOne(Jabatan::class,'id','jabatan_id');   
    }
}