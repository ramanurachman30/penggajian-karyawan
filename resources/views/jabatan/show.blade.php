@extends('layout/main')
@section('title','Detail Data Jabatan')
    
@section('container')

    <div class="col-8" style="margin-left:50px">
    <h3>Detail Data Jabatan</h3>
    <div class="card" style="width: 50rem;">
        <div class="card-body">
          <table>
          <h5 class="card-title">Jabatan : {{$jabatan->jabatan}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">Gapok : {{$jabatan->gapok}}</h6>
          <p class="card-text">Tunjangan : {{$jabatan->tunjangan}}</p>
          </table>
          
          
          <a href="{{$jabatan->id}}/edit" class="btn btn-primary">Edit</a>
          <form action="{{$jabatan->id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
          
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
          <a href="/jabatan" class="card-link btn btn-warning">Kembali</a>
        </div>
      </div>
</div>


@endsection