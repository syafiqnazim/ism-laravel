<?php

namespace App\Http\Controllers;

use App\Models\Kewangan;
use App\Models\Kluster;
use Illuminate\Http\Request;
use App\Models\Kursus;
use App\Models\Penceramah;

class KewanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kewangan  $kewangan
     * @return \Illuminate\Http\Response
     */
    public function show(Kewangan $kewangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kewangan  $kewangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kewangan $kewangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kewangan  $kewangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kewangan $kewangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kewangan  $kewangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kewangan $kewangan)
    {
        //
    }


    public function kutipanYuran(Request $request)
    {
        $klusters = Kluster::all();
        $kursuses = Kursus::all();
        return view('pages.kewangan.kutipan.laporan', compact('kursuses', 'klusters'));
    }

    public function editKutipanYuran(Request $request, $id)
    {
        $klusters = Kluster::all();
        $kursuses = Kursus::all();
        return view('pages.kewangan.kutipan.edit', compact('kursuses', 'klusters'));
    }

    public function updateKutipanYuran($id)
    {

    }

    public function laporanProgram(Request $request)
    {
        $klusters = Kluster::all();
        return view('pages.kewangan.program.laporan', compact('klusters'));
    }

    public function laporanPenceramah(Request $request)
    {
        $penceramahs = Penceramah::all();
        return view('pages.kewangan.penceramah.laporan', compact('penceramahs'));
    }
    public function laporanMakanMinum(Request $request)
    {
        $klusters = Kluster::all();
        $kursuses = Kursus::all();
        return view('pages.kewangan.makan-minum.laporan', compact('kursuses', 'klusters'));
    }
}
