<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 't_mahasiswa';
    protected $fillable = ['id','nama_mahasiswa','kelas','ipk_mahasiswa','eprt','no_handphone','email_mahasiswa','status_keprofesian','pilihan_keprofesian'];
}
