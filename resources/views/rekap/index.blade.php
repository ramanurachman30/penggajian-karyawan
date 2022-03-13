@extends('layout/main')
@section('title','Rekap Absensi')
    
@section('container')
                  <div class="col-md-12">
                    @if (session('status'))
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <span class="badge badge-pill badge-success">Success</span>
                              {{session('status')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                      </div>
                    @endif
                    <div class="content mt-3">
                      <div class="animated fadeIn">
                          <div class="row">
                          <div class="col-md-12">
                              <div class="card">
                                  <div class="card-header">
                                    <strong class="card-title">Rekap Absensi</strong>
                                  </div>
                                  <div class="card-body">
                                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Bulan</th>
                                        <th scope="col">Tahun</th>
                                        <th scope="col">Jumlah Masuk</th>
                                        <th scope="col">Tunjangan Kehadiran</th>
                                      </tr>
                                    </thead>
                                  
                                    <tbody>
                                      @foreach ($rekap as $rekaps)
                                      <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$rekaps->nama}}</td>
                                        <td>{{$rekaps->jk}}</td>
                                        <td>{{$rekaps->jabatan}}</td>
                                        <td>{{$rekaps->bulan}}</td>
                                        <td>{{$rekaps->tahun}}</td>
                                        <td>{{$rekaps->jumlah_masuk}}</td>
                                        <td>@currency($rekaps->tunjangan_kehadiran)</td>
                                        <td>
                                      
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
                
      @endsection