<?php

namespace App\Http\Controllers;

use App\Models\SenaraiKenderaan;
use Illuminate\Http\Request;

class SenaraiKenderaanController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            SenaraiKenderaan::create([
                "no_pendaftaran" => $request->no_pendaftaran,
                "jenama" => $request->jenama,
                "jenis_kenderaan" => $request->jenis_kenderaan,
            ]);

            return back();
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SenaraiKenderaan  $senaraiKenderaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        SenaraiKenderaan::where('id', $id)
            ->update([
                "no_pendaftaran" => $request->no_pendaftaran,
                "jenama" => $request->jenama,
                "jenis_kenderaan" => $request->jenis_kenderaan,
            ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SenaraiKenderaan  $senaraiKenderaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return SenaraiKenderaan::find($id)->delete();
    }
}
