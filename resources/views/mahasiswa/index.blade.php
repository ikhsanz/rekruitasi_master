@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Mahasiswa</h3>
                        <div class="right">
                            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>IPK</th>
                                    <th>EPRT</th>
                                    <th>No.Handphone</th>
                                    <th>Email</th>
                                    <th>Status Keprofesian</th>
                                    <th>Pilihan Keprofesian</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_mahasiswa as $mahasiswa)
                                <tr>
                                    <td>{{$mahasiswa->id}}</td>
                                    <td>{{$mahasiswa->nama_mahasiswa}}</td>
                                    <td>{{$mahasiswa->kelas}}</td>
                                    <td>{{$mahasiswa->ipk_mahasiswa}}</td>
                                    <td>{{$mahasiswa->eprt}}</td>
                                    <td>{{$mahasiswa->no_handphone}}</td>
                                    <td>{{$mahasiswa->email_mahasiswa}}</td>
                                    @if($mahasiswa->status_keprofesian == 1 )
                                    <td>Aktif</td>
                                    @elseif($mahasiswa->status_keprofesian == 0)
                                    <td>Tidak Aktif</td>
                                    @endif
                                    <td>{{$mahasiswa->pilihan_keprofesian}}</td>
                                    <td><a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-primary btn-sm">Edit</a></td>
                                    <td><a href="/mahasiswa/{{$mahasiswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus?')">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/mahasiswa/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input name="id" type="text" class="form-control" id="formGroupExampleInput" placeholder="NIM Mahasiswa">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Mahasiswa</label>
                            <input name="nama_mahasiswa" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Mahasiswa">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input name="kelas" type="text" class="form-control" id="formGroupExampleInput" placeholder="Kelas" onkeydown="upperCaseF(this)">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">IPK</label>
                            <input name="ipk_mahasiswa" type="number" step="0.01" class="form-control" id="formGroupExampleInput" placeholder="IPK">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">EPRT</label>
                            <input name="eprt" type="number" class="form-control" id="formGroupExampleInput" placeholder="EPRT">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No.Hanphone</label>
                            <input name="no_handphone" type="tel" class="form-control" id="formGroupExampleInput" placeholder="Handphone">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email Mahasiswa</label>
                            <input name="email_mahasiswa" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status Keprofesian</label>
                            <select name="status_keprofesian" class="form-control" id="exampleFormControlSelect1">
                                <option value="0">Tidak Aktif</option>
                                <option value="1">Aktif</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilihan Keprofesian</label>
                            <select name="pilihan_keprofesian" class="form-control" id="exampleFormControlSelect1">
                                <option value="EDM">EDM</option>
                                <option value="ERP">ERP</option>
                                <option value="EA">EA</option>
                                <option value="ISM">ISM</option>
                                <option value="EIM">EIM</option>
                            </select>
                        </div>
                        <button type=" submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
        <div>
            @stop
           