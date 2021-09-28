<?php

namespace App\Http\Controllers;

use App\Models\Kewangan;
use Illuminate\Http\Request;
use App\Models\Kursus;

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

    public function kutipan(Request $request)
    {
        $kursuses = Kursus::all();
        $query = '';
        if (isset($request->query()['nama_kursus'])) {
            $query = $request->query()['nama_kursus'];
            $kursuses = Kursus::where('nama_kursus', 'like', '%' . $query . '%')->get();
        }

        return view('pages/kewangan/kutipan')->with(['kursuses' => $kursuses, 'query' => $query]);
    }
}
