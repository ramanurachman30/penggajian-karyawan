@extends('layout/main')
@section('title','Absen')

@section('container')

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Absen</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Karyawan</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      @foreach ($karyawan as $karyawan)
                      <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$karyawan->nama}}</td>
                        <td>{{$karyawan->jk}}</td>
                        <td>
                            <a href="/karyawan/{{$karyawan->id}}" class="btn btn-primary">Detail</a>
                            <a href="/absen/create" class="btn btn-warning">Absen</a>
                          <form action="absen/{{$karyawan->id}}" method="post" class="d-inline">
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


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


</body>
</html>
@endsection