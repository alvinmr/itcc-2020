<?php

namespace App\Http\Controllers;

use App\PendaftaranPanitia;
use Illuminate\Http\Request;

class PendaftaranPanitiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pendaftaran-panitia.form_pendaftaran');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendaftaranpanitia = new PendaftaranPanitia();
        $pendaftaranpanitia->id = $request->id;
        $pendaftaranpanitia->nama = $request->nama;
        $pendaftaranpanitia->nim = $request->nim;
        $pendaftaranpanitia->angkatan = $request->angkatan;
        $pendaftaranpanitia->idline = $request->idline;
        $pendaftaranpanitia->telepon = $request->telepon;
        $pendaftaranpanitia->email = $request->email;
        $pendaftaranpanitia->sie = $request->sie;
        $pendaftaranpanitia->save();
        return redirect('/DaftarPanitia')->with('success', 'Pendaftaran Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PendaftaranPanitia  $pendaftaranPanitia
     * @return \Illuminate\Http\Response
     */
    public function show(PendaftaranPanitia $pendaftaranPanitia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PendaftaranPanitia  $pendaftaranPanitia
     * @return \Illuminate\Http\Response
     */
    public function edit(PendaftaranPanitia $pendaftaranPanitia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PendaftaranPanitia  $pendaftaranPanitia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PendaftaranPanitia $pendaftaranPanitia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PendaftaranPanitia  $pendaftaranPanitia
     * @return \Illuminate\Http\Response
     */
    public function destroy(PendaftaranPanitia $pendaftaranPanitia)
    {
        //
    }
}
