@extends('layout/main')
@section('title','tambahdata')
  
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb mr-3">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('divisi.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br>  
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
    <form action="{{ route('divisi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row mt-5">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Unit Kerja</strong>
                    <input type="text" name="unit_kerja" class="form-control" placeholder="Unit Kerja">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bagian</strong>
                    <input type="text" name="bagian" class="form-control" placeholder="Bagian">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>karyawan Id</strong>
                    <select name="karyawan_id" class="form-control">
                        <option value="">Pilih</option>
                        @foreach ($karyawan as $karyawan)
                        <option value="{{$karyawan->id}}"{{old('karyawan')==$karyawan->nama? 'selected':null}}>{{$karyawan->nama}}</option> 
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
    </form>
@endsection