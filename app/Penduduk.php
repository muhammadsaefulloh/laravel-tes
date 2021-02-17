<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = "penduduk";
    protected $fillable = ['nik','nama','jenis_kelamin','alamat','tanggal_input','user_input','tanggal_update','user_update'];
}
