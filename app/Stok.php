<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    protected $table = "stok";
    protected $fillable = ['jenis','satuan','jumlah','nota'];
}