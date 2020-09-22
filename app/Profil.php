<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = "profil";
    protected $fillable = ['nama_pt', 'alamat','deskripsi','kontak','fb','email','foto'];
}