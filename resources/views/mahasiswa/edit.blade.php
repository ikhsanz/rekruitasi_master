@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
                                <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input name="id" type="text" class="form-control" id="formGroupExampleInput" placeholder="NIM Mahasiswa" value="{{$mahasiswa->id}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input name="nama_mahasiswa" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Mahasiswa" value="{{$mahasiswa->nama_mahasiswa}}">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input name="kelas" type="text" class="form-control" id="formGroupExampleInput" placeholder="Kelas" onkeydown="upperCaseF(this)" value="{{$mahasiswa->kelas}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">IPK</label>
                        <input name="ipk_mahasiswa" type="number" step="0.01" class="form-control" id="formGroupExampleInput" placeholder="IPK" value="{{$mahasiswa->ipk_mahasiswa}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">EPRT</label>
                        <input name="eprt" type="number" class="form-control" id="formGroupExampleInput" placeholder="EPRT" value="{{$mahasiswa->eprt}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">No.Hanphone</label>
                        <input name="no_handphone" type="tel" class="form-control" id="formGroupExampleInput" placeholder="Handphone" value="{{$mahasiswa->no_handphone}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email Mahasiswa</label>
                        <input name="email_mahasiswa" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$mahasiswa->email_mahasiswa}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status Keprofesian</label>
                        <select name="status_keprofesian" class="form-control" id="exampleFormControlSelect1">
                            <option value=0 @if($mahasiswa->status_keprofesian == 0) selected @endif>Tidak Aktif</option>
                            <option value=1 @if($mahasiswa->status_keprofesian == 1) selected @endif>Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilihan Keprofesian</label>
                        <select name="pilihan_keprofesian" class="form-control" id="exampleFormControlSelect1" value="{{$mahasiswa->pilihan_keprofesian}}">
                            <option value="EDM" @if($mahasiswa->pilihan_keprofesian == "EDM") selected @endif>EDM</option>
                            <option value="ERP" @if($mahasiswa->pilihan_keprofesian == "ERP") selected @endif>ERP</option>
                            <option value="EA" @if($mahasiswa->pilihan_keprofesian == "EA") selected @endif>EA</option>
                            <option value="ISM" @if($mahasiswa->pilihan_keprofesian == "ISM") selected @endif>ISM</option>
                            <option value="EIM" @if($mahasiswa->pilihan_keprofesian == "EIM") selected @endif>EIM</option>
                        </select>
                    </div>
                    <button type=" submit" class="btn btn-primary">Update</button>
                </form>
								</div>
							</div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('content1')
        <h1>Edit data mahasiswa</h1>
        @if(session('sukses'))
        <div class="alert alert-primary" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input name="id" type="text" class="form-control" id="formGroupExampleInput" placeholder="NIM Mahasiswa" value="{{$mahasiswa->id}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input name="nama_mahasiswa" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Mahasiswa" value="{{$mahasiswa->nama_mahasiswa}}">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input name="kelas" type="text" class="form-control" id="formGroupExampleInput" placeholder="Kelas" onkeydown="upperCaseF(this)" value="{{$mahasiswa->kelas}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">IPK</label>
                        <input name="ipk_mahasiswa" type="number" step="0.01" class="form-control" id="formGroupExampleInput" placeholder="IPK" value="{{$mahasiswa->ipk_mahasiswa}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">EPRT</label>
                        <input name="eprt" type="number" class="form-control" id="formGroupExampleInput" placeholder="EPRT" value="{{$mahasiswa->eprt}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">No.Hanphone</label>
                        <input name="no_handphone" type="tel" class="form-control" id="formGroupExampleInput" placeholder="Handphone" value="{{$mahasiswa->no_handphone}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email Mahasiswa</label>
                        <input name="email_mahasiswa" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$mahasiswa->email_mahasiswa}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status Keprofesian</label>
                        <select name="status_keprofesian" class="form-control" id="exampleFormControlSelect1">
                            <option value=0 @if($mahasiswa->status_keprofesian == 0) selected @endif>Tidak Aktif</option>
                            <option value=1 @if($mahasiswa->status_keprofesian == 1) selected @endif>Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilihan Keprofesian</label>
                        <select name="pilihan_keprofesian" class="form-control" id="exampleFormControlSelect1" value="{{$mahasiswa->pilihan_keprofesian}}">
                            <option value="EDM" @if($mahasiswa->pilihan_keprofesian == "EDM") selected @endif>EDM</option>
                            <option value="ERP" @if($mahasiswa->pilihan_keprofesian == "ERP") selected @endif>ERP</option>
                            <option value="EA" @if($mahasiswa->pilihan_keprofesian == "EA") selected @endif>EA</option>
                            <option value="ISM" @if($mahasiswa->pilihan_keprofesian == "ISM") selected @endif>ISM</option>
                            <option value="EIM" @if($mahasiswa->pilihan_keprofesian == "EIM") selected @endif>EIM</option>
                        </select>
                    </div>
                    <button type=" submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        @endsection


  

   