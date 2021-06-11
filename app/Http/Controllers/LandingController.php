<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HasilLomba;

class LandingController extends Controller
{
    public function showPemrograman()
    {
    	return view('landing.new.prog');
    }

    public function showWeb()
    {
    	return view('landing.new.web');
    }

    public function showLcc()
    {
    	return view('landing.new.lcc');
    }

    public function showIdea()
    {
    	return view('landing2020.idebisnis');
    }

    public function showPaa()
    {
    	return view('landing.new.paa');
    }

    public function showInovasi()
    {
        return view('landing2020.inovasi');
    }

    public function showSoftware()
    {
        return view('landing2020.software');
    }
    
    public function showHasilInovasi(){
        $data['lomba'] = "Inovasi Kreatif";
        $data['hasilLomba'] = HasilLomba::where('competition_id','=',3)
            ->get();
        return view('landing2020.hasil-lomba', $data);
    }

    public function showHasilIdea(){
        $data['lomba'] = "Pengembangan Ide Bisnis TIK";
        $data['hasilLomba'] = HasilLomba::where('competition_id','=',4)
            ->get();
        return view('landing2020.hasil-lomba', $data);
    }

    public function showHasilMobileApp(){
        $data['lomba'] = "Mobile App Development";
        $data['hasilLomba'] = HasilLomba::where('competition_id','=',5)
            ->get();
        return view('landing2020.hasil-lomba', $data);
    }
}
