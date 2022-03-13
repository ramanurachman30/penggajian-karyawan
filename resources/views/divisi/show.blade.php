@extends('layout/main')
@section('title','Detail Data Jabatan')
    
@section('container')

    <div class="col-8" style="margin-left:50px">
    <h3>Detail Divisi</h3>
    <div class="card" style="width: 50rem;">
        <div class="card-body">
          <table>
          <h5 class="card-title">Unit Kerja : {{$divisi->unit_kerja}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">Bagian : {{$divisi->bagian}}</h6>
          <p class="card-text">Karyawan Id : {{$divisi->karyawan_id}}</p>
          </table>
          
          
          <a href="{{$divisi->id}}/edit" class="btn btn-primary">Edit</a>
          <form action="{{$divisi->id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
          
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
          <a href="/divisi" class="card-link btn btn-warning">Kembali</a>
        </div>
      </div>
</div>


@endsection