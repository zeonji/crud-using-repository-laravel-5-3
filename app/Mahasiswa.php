<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //untuk mengisi nama tabel
    protected $table = 'mahasiswa';
    // untuk mengisi nama field dalam tabel
    public $fillable = ['nama', 'alamat', 'jurusan'];
}
