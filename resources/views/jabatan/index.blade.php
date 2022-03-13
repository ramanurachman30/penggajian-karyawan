@extends('layout/main')
@section('title','Jabatan')

@section('container')

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                  <a href="{{ route('jabatan.create') }}" class="btn btn-success my-3">Tambah Data</a>
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Jabatan</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Jabatan</th>
                        <th>Gapok</th>
                        <th>Tunjangan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      @foreach ($jabatan as $jabatan)
                      <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$jabatan->jabatan}}</td>
                        <td>{{$jabatan->gapok}}</td>
                        <td>{{$jabatan->tunjangan}}</td>
                        <td>
                            <a href="/jabatan/{{$jabatan->id}}" class="btn btn-primary">Detail</a>
                            <a href="jabatan/{{$jabatan->id}}/edit" class="btn btn-warning">Edit</a>
                          <form action="jabatan/{{$jabatan->id}}" method="post" class="d-inline">
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