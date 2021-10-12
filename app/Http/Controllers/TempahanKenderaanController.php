<?php

namespace App\Http\Controllers;

use App\Models\TempahanKenderaan;
use Illuminate\Http\Request;

class TempahanKenderaanController extends Controller
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
            TempahanKenderaan::create([
                "nama_penempah" => $request->nama_penempah,
                "ic_penempah" => $request->ic_penempah,
                "tujuan" => $request->tujuan,
                "destinasi" => $request->destinasi,
                "pemandu" => $request->pemandu,
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
     * @param  \App\Models\TempahanKenderaan  $tempahanKenderaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->tarikh_mula);
        if ($request->tarikh_mula) {
            TempahanKenderaan::where('id', $id)
                ->update([
                    "tarikh_mula" => date("Y-m-d", strtotime($request->tarikh_mula)),
                    "tarikh_akhir" => date("Y-m-d", strtotime($request->tarikh_akhir)),
                ]);
        } else {
            TempahanKenderaan::where('id', $id)
                ->update([
                    "nama_penempah" => $request->nama_penempah,
                    "ic_penempah" => $request->ic_penempah,
                    "tujuan" => $request->tujuan,
                    "destinasi" => $request->destinasi,
                    "pemandu" => $request->pemandu,
                    "jenis_kenderaan" => $request->jenis_kenderaan,
                ]);
        };
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TempahanKenderaan  $tempahanKenderaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return TempahanKenderaan::find($id)->delete();
    }
}
