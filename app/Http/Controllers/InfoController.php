<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    //

    public function showInfoGuidebook(){
        return view('info.guidebook2020');
    } 

    /*public function showInfoPluginLibrary(){
        return view('info.pluginlibrary');
    }*/
}
