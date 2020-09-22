<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    protected $table = "berkas";
    protected $fillable = ['id_pelanggan', 'ktp','kk','npwp','ket_nikah','rek_koran','ket_lurah','pas_foto','slip_gaji','spt','ket_usaha','ket_penghasilan','situ_siup','sk_terakhir','surat_kerja_swasta'];
}