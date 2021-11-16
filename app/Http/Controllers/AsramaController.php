<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\Kursus;
use App\Models\Asrama;
use Illuminate\Http\Request;

class AsramaController extends Controller
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
     * @param  \App\Models\Asrama  $asrama
     * @return \Illuminate\Http\Response
     */
    public function show(Asrama $asrama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asrama  $asrama
     * @return \Illuminate\Http\Response
     */
    public function edit(Asrama $asrama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asrama  $asrama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asrama $asrama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asrama  $asrama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asrama $asrama)
    {
        //
    }

    public function tempahanDalaman(Request $request)
    {
        $kursuses = Kursus::all();
        $query = '';
        if (isset($request->query()['nama_kursus'])) {
            $query = $request->query()['nama_kursus'];
            $kursuses = Kursus::where('nama_kursus', 'like', '%' . $query . '%')->get();
        }

        return view('pages/asrama/tempahan-dalaman')->with(['roles' => Role::all(), 'kursuses' => $kursuses, 'query' => $query]);
    }

    public function pengurusanBilik(Request $request)
    {
        $asrama = Asrama::all();
        $query = '';
        if (isset($request->query()['kod_asrama'])) {
            $query = $request->query()['kod_asrama'];
            $asrama = Asrama::where('kod_asrama', 'like', '%' . $query . '%')->get();
        }

        return view('pages/asrama/pengurusan-asrama')->with(['roles' => Role::all(), 'asramas' => $asrama, 'query' => $query]);
    }

    public function tempahanKursus(Request $request)
    {
        $asrama = Asrama::all();
        $query = '';
        if (isset($request->query()['kod_asrama'])) {
            $query = $request->query()['kod_asrama'];
            $asrama = Asrama::where('kod_asrama', 'like', '%' . $query . '%')->get();
        }

        return view('pages/asrama/tempahan-khusus')->with(['roles' => Role::all(), 'asramas' => $asrama, 'query' => $query]);
    }

    public function jadualBilik(Request $request)
    {
        return view('pages/error/construction-page');
    }
}
