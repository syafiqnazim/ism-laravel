<?php

namespace App\Http\Controllers;

use App\Models\SenaraiPemandu;
use Illuminate\Http\Request;

class SenaraiPemanduController extends Controller
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
            SenaraiPemandu::create([
                "nama_pemandu" => $request->nama_pemandu,
                "ic_pemandu" => $request->ic_pemandu,
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
     * @param  \App\Models\SenaraiPemandu  $senaraiPemandu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        SenaraiPemandu::where('id', $id)
            ->update([
                "nama_pemandu" => $request->nama_pemandu,
                "ic_pemandu" => $request->ic_pemandu,
            ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SenaraiPemandu  $senaraiPemandu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return SenaraiPemandu::find($id)->delete();
    }
}
