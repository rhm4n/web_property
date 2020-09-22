<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjekController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$projek = \App\Projek::all();
 
    	// mengirim data pegawai ke view index
    	return view('projek.index',['projek' => $projek]);
 
    }

    public function detail($slug=null)
    {
    	// mengambil data dari table pegawai
    	$detailProjek	= \App\Projek::find($slug);
    	$galeriProjek 	= \App\Galeri::find($slug);
    	$infoRumah 		= \App\Rumah::find($slug);
    	$infoSpektek 	= \App\Spektek::find($slug);
 
    	// mengirim data pegawai ke view index
    	return view('projek.detail')->with([
    		'detailProjek' 	=> $detailProjek,
    		'galeriProjek' 	=> $galeriProjek,
    		'infoRumah' 	=> $infoRumah,
    		'infoSpektek'	=> $infoSpektek,
    	]);
    }
}
