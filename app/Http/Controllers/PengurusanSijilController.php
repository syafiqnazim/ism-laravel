<?php

namespace App\Http\Controllers;

use App\Models\PengurusanSijil;
use Illuminate\Http\Request;

class PengurusanSijilController extends Controller
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
     * @param  \App\Models\PengurusanSijil  $pengurusanSijil
     * @return \Illuminate\Http\Response
     */
    public function show(PengurusanSijil $pengurusanSijil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PengurusanSijil  $pengurusanSijil
     * @return \Illuminate\Http\Response
     */
    public function edit(PengurusanSijil $pengurusanSijil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PengurusanSijil  $pengurusanSijil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PengurusanSijil $pengurusanSijil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengurusanSijil  $pengurusanSijil
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengurusanSijil $pengurusanSijil)
    {
        //
    }

    public function pengurusanMaklumatSijil(Request $request)
    {
        return view('pages/error/construction-page');
    }

    public function cetakSijil(Request $request)
    {
        return view('pages/error/construction-page');
    }
}
