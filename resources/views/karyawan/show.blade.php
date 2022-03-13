@extends('layout/main')
@section('title','Detail Data Karyawan')
    
@section('container')

<div class="col-12" style="margin-left:50px">
  <h3>Detail Data Karyawan</h3>
  <div class="card" style="width: 60rem;">
  <div class="row align-items-center">
    <div class="col-6 ">
    <p class="col-16" style="margin-left:50px"><img src="/post-images/{{$karyawan->foto}}"  width="300px"></p>
    </div>
    <div class="col-6">
      <div class="card-body">
        <table>
          
        <h5 class="card-title">Nama : {{$karyawan->nama}}</h5>
        <h5 class="card-subtitle mb-2">Jenis Kelamin : {{$karyawan->jk}}</h5>
        <h5 class="card-text mb-2">Tanggal Lahir : {{$karyawan->tgl_lahir}}</h5>
        <h5 class="card-text mb-2">Alamat : {{$karyawan->alamat}}</h5>
        
        <h5 class="card-title">Agama : {{$karyawan->agama}}</h5>
        <h5 class="card-text mb-2">No Hp : {{$karyawan->no_hp}}</h5>
        <h5 class="card-text mb-2">Pendidikan Terakhir: {{$karyawan->pendidikan_terakhir}}</h5>
        <h5 class="card-text mb-2">email : {{$karyawan->email}}</h5>
        <h5 class="card-text mb-2">Jabatan Saat Ini : {{$karyawan->jabatan_id}}</h5>
        
        </table>
        
        
        <a href="{{$karyawan->id}}/edit" class="btn btn-primary">Edit</a>
        <form action="{{$karyawan->id}}" method="post" class="d-inline">
          @method('delete')
          @csrf
        
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
        <a href="/karyawan" class="card-link btn btn-warning">Kembali</a>
      </div>
      </div>
      </div>
    </div>
</div>
</div>


@endsection