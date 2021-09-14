<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Penyelenggaraan;
use App\Models\Kursus;
use App\Models\Asrama;
use Illuminate\Http\Request;

class PenyelenggaraanController extends Controller
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

    public function senaraiTugasan(Request $request)
    {
        $penyelenggaraans = Penyelenggaraan::all();
        $query = '';
        if (isset($request->query()['jenis_kerosakan'])) {
            $query = $request->query()['jenis_kerosakan'];
            $penyelenggaraans = Penyelenggaraan::where('jenis_kerosakan', 'like', '%' . $query . '%')->get();
        }

        return view('pages/penyelenggaraan/senarai-tugasan')->with(['roles' => Role::all(), 'penyelenggaraans' => $penyelenggaraans, 'query' => $query]);
    }

    public function penugasanPenyelenggara(Request $request)
    {
        $penyelenggaraans = Penyelenggaraan::all();
        $query = '';
        if (isset($request->query()['jenis_kerosakan'])) {
            $query = $request->query()['jenis_kerosakan'];
            $penyelenggaraans = Penyelenggaraan::where('jenis_kerosakan', 'like', '%' . $query . '%')->get();
        }

        return view('pages/penyelenggaraan/penugasan-penyelenggara')->with(['roles' => Role::all(), 'penyelenggaraans' => $penyelenggaraans, 'query' => $query]);
    }
}
