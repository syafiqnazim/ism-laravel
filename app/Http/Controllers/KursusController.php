<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursus;

class KursusController extends Controller
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
            return Kursus::create([
                "nama_kursus" => $request->nama_kursus,
                "kapasiti" => $request->kapasiti,
                "kluster" => $request->kluster,
                "peruntukan" => $request->peruntukan,
            ]);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        Kursus::where('id', $id)
            ->update([
                "nama_kursus" => $request->nama_kursus,
                "kapasiti" => $request->kapasiti,
                "kluster" => $request->kluster,
                "peruntukan" => $request->peruntukan,
            ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Kursus::find($id)->delete();
    }
}
