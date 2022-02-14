<?php

namespace App\Http\Controllers;

use App\Models\Kluster;
use App\Models\PengurusanIct;
use App\Models\Kursus;
use Illuminate\Http\Request;

class PengurusanIctController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PengurusanIct::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        // validation
        try {
            PengurusanIct::create([
                "nama_kursus" => $request->nama_kursus,
                "peralatan" => $request->peralatan,
                "jumlah" => $request->jumlah,
                "nama_penempah" => $request->nama_penempah,
                "tarikh_mula" => date("Y-m-d", strtotime($request->tarikh_mula)),
                "tarikh_akhir" => date("Y-m-d", strtotime($request->tarikh_akhir . ' +1 day')),
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
     * @param  \App\Models\PengurusanIct  $pengurusanIct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        PengurusanIct::where('id', $id)
            ->update([
                "nama_kursus" => $request->nama_kursus,
                "peralatan" => $request->peralatan,
                "jumlah" => $request->jumlah,
                "nama_penempah" => $request->nama_penempah,
                "tarikh_mula" => date("Y-m-d", strtotime($request->tarikh_mula)),
                "tarikh_akhir" => date("Y-m-d", strtotime($request->tarikh_akhir . ' +1 day')),
            ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengurusanIct  $pengurusanIct
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return PengurusanIct::find($id)->delete();
    }

    public function pengurusanIct(Request $request)
    {
        $kursuses = Kursus::all();
        $query_kursus = '';
        if (isset($request->query()['nama_kursus'])) {
            $query_kursus = $request->query()['nama_kursus'];
            $kursuses = Kursus::where('nama_kursus', 'like', '%' . $query_kursus . '%')->get();
        }

        $pengurusanict = PengurusanIct::all();
        $query = '';
        if (isset($request->query()['nama_kursus'])) {
            $query = $request->query()['nama_kursus'];
            $pengurusanict = PengurusanIct::where('nama_kursus', 'like', '%' . $query . '%')->get();
        }

        return view('pages/pengurusanict/pengurusan-ict')->with(['pengurusanicts' => $pengurusanict, 'kursuses' => $kursuses, 'query' => $query, 'query_kursus' => $query_kursus]);
    }
}
