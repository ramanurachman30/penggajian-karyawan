@extends('layout/main')
@section('title','tambahdata')
  
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb mr-3">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('jabatan.index') }}"> Back</a>
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
        
    <form action="{{ route('jabatan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row mt-5">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jabatan</strong>
                    <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gapok</strong>
                    <input type="text" name="gapok" class="form-control" placeholder="Gapok">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tunjangan</strong>
                    <input type="text" name="tunjangan" class="form-control" placeholder="Tunjangan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
    </form>
@endsection