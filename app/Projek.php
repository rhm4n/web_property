<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projek extends Model
{
    protected $table = "projek";
    protected $fillable = ['id_user', 'nama_perumahan','lokasi','deskripsi','video','foto','siteplan','posting','slug','fee'];
}