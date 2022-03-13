@extends('layout/main')
  
@section('container')
    <div class="row ml-3">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('karyawan.index') }}"> Back</a>
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
        
    <form action="{{ route('karyawan.update',$karyawan->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf

        @method('PUT')
        
        <div class="row mt-5" style="width: 60rem">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $karyawan->nama }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Kelamin</strong>
                    <select class="form-control" name="jk" id="" value="{{ $karyawan->jk }}">
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tgl Lahir</strong>
                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tgl Lahir" value="{{ $karyawan->tgl_lahir }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat</strong>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $karyawan->alamat }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Agama</strong>
                    <select class="form-control" name="agama" id="" value="{{ $karyawan->agama }}">
                        <option value="Islam">Islam</option>
                        <option value="Kristem">Kristem</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghuchu">Konghuchu</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No HP</strong>
                    <input type="text" name="no_hp" class="form-control" placeholder="No HP" value="{{ $karyawan->no_hp }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pendidikan Terakhir</strong>
                    <select class="form-control" name="pendidikan_terakhir" id="" value="{{ $karyawan->pendidikan_terakhir }}">
                        <option value="SMK/SMA/MA/MAK">SMK/SMA/MA/MAK</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Sarjana">Sarjana</option>
                        <option value="Magister">Magister</option>
                        <option value="Doktor">Doktor</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email</strong>
                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $karyawan->email }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Foto</strong>
                    <input type="file" name="foto" class="form-control" placeholder="Foto" value="{{ $karyawan->foto }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jabatan Id</strong>
                    <select class="form-control" name="jabatan_id">
                        @foreach($jabatan as $jabatan)
                        <option value="{{$jabatan->id}}">{{$jabatan->jabatan}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
        
    </form>
@endsection