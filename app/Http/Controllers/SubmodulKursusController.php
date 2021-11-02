<?php

namespace App\Http\Controllers;

use App\Models\SubmodulKursus;
use Illuminate\Http\Request;

class SubmodulKursusController extends Controller
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
            SubmodulKursus::create([
                "nama_submodul" => $request->nama_submodul,
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
     * @param  \App\Models\SubmodulKursus  $submodulKursus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        SubmodulKursus::where('id', $id)
            ->update([
                "nama_submodul" => $request->nama_submodul,
            ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubmodulKursus  $submodulKursus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return SubmodulKursus::find($id)->delete();
    }
}
