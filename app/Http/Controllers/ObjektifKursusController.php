<?php

namespace App\Http\Controllers;

use App\Models\ObjektifKursus;
use Illuminate\Http\Request;

class ObjektifKursusController extends Controller
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
            ObjektifKursus::create([
                "objektif_kursus" => $request->objektif_kursus,
                "kursus_id" => $request->kursus_id,
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
     * @param  \App\Models\ObjektifKursus  $objektifKursus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        ObjektifKursus::where('id', $id)
            ->update([
                "objektif_kursus" => $request->objektif_kursus,
                "kursus_id" => $request->kursus_id,
            ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ObjektifKursus  $objektifKursus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return ObjektifKursus::find($id)->delete();
    }
}
