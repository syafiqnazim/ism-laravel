<?php

namespace App\Http\Controllers;

use App\Models\Tempahan;
use App\Models\Kursus;
use App\Models\TempahanKenderaan;
use App\Models\Role;
use App\Models\SenaraiKenderaan;
use App\Models\SenaraiPemandu;
use Illuminate\Http\Request;

class TempahanController extends Controller
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
     * @param  \App\Models\Tempahan  $tempahan
     * @return \Illuminate\Http\Response
     */
    public function show(Tempahan $tempahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tempahan  $tempahan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tempahan $tempahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tempahan  $tempahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tempahan $tempahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tempahan  $tempahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tempahan $tempahan)
    {
        //
    }

    public function bilikLatihan(Request $request)
    {
        $kursuses = Kursus::all();
        $query = '';
        if (isset($request->query()['nama_kursus'])) {
            $query = $request->query()['nama_kursus'];
            $kursuses = Kursus::where('nama_kursus', 'like', '%' . $query . '%')->get();
        }

        return view('pages/tempahan/bilik-latihan')->with(['roles' => Role::all(), 'kursuses' => $kursuses, 'query' => $query]);
    }

    public function kenderaan(Request $request)
    {
        $tempahan_kenderaans = TempahanKenderaan::all();
        $query_tempahan_kenderaan = '';
        if (isset($request->query()['nama_penempah'])) {
            $query_tempahan_kenderaan = $request->query()['nama_penempah'];
            $tempahan_kenderaans = TempahanKenderaan::where('nama_penempah', 'like', '%' . $query_tempahan_kenderaan . '%')->get();
        }

        $senarai_kenderaans = SenaraiKenderaan::all();
        $query_senarai_kenderaan = '';
        if (isset($request->query()['no_pendaftaran'])) {
            $query_tempahan_kenderaan = $request->query()['no_pendaftaran'];
            $senarai_kenderaans = SenaraiKenderaan::where('no_pendaftaran', 'like', '%' . $query_senarai_kenderaan . '%')->get();
        }

        $senarai_pemandus = SenaraiPemandu::all();
        $query_senarai_pemandu = '';
        if (isset($request->query()['nama_pemandu'])) {
            $query_senarai_pemandu = $request->query()['nama_pemandu'];
            $senarai_pemandus = SenaraiPemandu::where('nama_pemandu', 'like', '%' . $query_senarai_pemandu . '%')->get();
        }

        $kursuses = Kursus::all();

        return view('pages/tempahan/kenderaan')->with([
            'roles' => Role::all(),
            'tempahan_kenderaans' => $tempahan_kenderaans,
            'senarai_kenderaans' => $senarai_kenderaans,
            'senarai_pemandus' => $senarai_pemandus,
            'query_tempahan_kenderaan' => $query_tempahan_kenderaan,
            'query_senarai_kenderaan' => $query_senarai_kenderaan,
            'query_senarai_pemandu' => $query_senarai_pemandu
        ]);
    }

    public function tempahan1mtc(Request $request)
    {
        $kursuses = Kursus::all();
        $query = '';
        if (isset($request->query()['nama_kursus'])) {
            $query = $request->query()['nama_kursus'];
            $kursuses = Kursus::where('nama_kursus', 'like', '%' . $query . '%')->get();
        }

        return view('pages/tempahan/tempahan-1mtc')->with(['roles' => Role::all(), 'kursuses' => $kursuses, 'query' => $query]);
    }
}
