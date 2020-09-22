<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = "pelanggan";
    protected $fillable = ['referral','kode_booking','id_rumah','nama','no_hp','email','pekerjaan','status_berkas','batas_waktu'];
}