<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$projek = \App\Projek::all();
 
    	// mengirim data pegawai ke view index
    	return view('home.index',['projek' => $projek]);
 
    }
}
