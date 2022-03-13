@extends('layout/main')
@section('title','Jurusan')

@section('container')

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="row align-items-center">
                    <div class="col-6">
                      <a href="/karyawan/create" class="btn btn-success my-3">Tambah Data</a>
                    </div>
                      <div class="col-8 mr-2">
                        <p>jumlah data ada {{ $jumlah }}</p>
                      </div>
                  </div>
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      @foreach ($karyawan as $karyawan)
                      <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$karyawan->nama}}</td>
                        <td>{{$karyawan->jk}}</td>
                        <td>{{$karyawan->tgl_lahir}}</td>
                        <td>{{$karyawan->alamat}}</td>
                        <td>{{$karyawan->email}}</td>
                        <td>{{$karyawan->dataJabatan->jabatan}}</td>
                        <td>
                            <a href="/karyawan/{{$karyawan->id}}" class="btn btn-primary">Detail</a>
                            <a href="karyawan/{{$karyawan->id}}/edit" class="btn btn-warning">Edit</a>
                          <form action="karyawan/{{$karyawan->id}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                          
                          <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


</body>
</html>
@endsection