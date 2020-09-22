<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$projek = DB::table('projek')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['projek' => $projek]);
 
    }

    public function perusahaan()
    {
    	$perusahaan = DB::table('profil')->get();
    	return view('perusahaanLayout',['perusahaan' => $perusahaan]);
    }

    public function portofolio()
    {
    	$portofolio = DB::table('layanan')->get();
    	return view('portofolioLayout',['portofolio' => $portofolio]);
    }

    public function tim()
    {
    	$tim = DB::table('tim')->get();
    	return view('timLayout',['tim' => $tim]);	
    }


}
