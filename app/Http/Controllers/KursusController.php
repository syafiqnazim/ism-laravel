<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursus;
use App\Models\SubmodulKursus;
use App\Models\ProgramKursus;
use App\Models\PraktikalKursus;
use Carbon\Carbon;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Kursus::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        // dd($request);
        // $today = date('d/m/Y');
        try {
            Kursus::create([
                "nama_kursus" => $request->nama_kursus,
                "kapasiti" => $request->kapasiti,
                "kluster" => $request->kluster,
                "peruntukan" => $request->peruntukan,
                "updated_at" => Carbon::now(),
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        // if ($request->yuran) {
        //     dd($request);
        //     Kursus::where('id', $id)
        //         ->update([
        //             "yuran" => $request->yuran,
        //             "peperiksaan" => $request->peperiksaan,
        //             "asrama" => $request->asrama,
        //         ]);
        // } else
        if ($request->tarikh_mula) {
            Kursus::where('id', $id)
                ->update([
                    "tarikh_mula" => date("Y-m-d", strtotime($request->tarikh_mula)),
                    "tarikh_akhir" => date("Y-m-d", strtotime($request->tarikh_akhir . ' +1 day')),
                ]);
        } else {
            Kursus::where('id', $id)
                ->update([
                    "nama_kursus" => $request->nama_kursus,
                    "kapasiti" => $request->kapasiti,
                    "kluster" => $request->kluster,
                    "peruntukan" => $request->peruntukan,
                ]);
        };
        return back();
    }

    public function updateKursus(Request $request)
    {
        $id = $request->id;
        $today = date('Y-m-d');
        Kursus::where('id', $id)
            ->update([

                "objektif_program" => $request->objektif_program,
                "tarikh_mula" => date("Y-m-d", strtotime($request->tarikh_mula)),
                "tarikh_akhir" => date("Y-m-d", strtotime($request->tarikh_akhir . ' +1 day')),
                "kapasiti_peserta" => $request->kapasiti_peserta,
                "ispeperiksaan" => $request->ispeperiksaan,
                "isasrama" => $request->isasrama,
                "ispraktikal" => $request->ispraktikal,
                "updated_at" => $today,

            ]);
        return back();
    }

    public function storeModulKursus(Request $request)
    {
        $today = date('Y-m-d');

        SubmodulKursus::create([
            "masa_mula" => $request->masa_mula,
            "masa_akhir" => $request->masa_akhir,
            "nama_submodul" => $request->nama_submodul,
            "penceramah_id" => $request->penceramah_id,
            "kursus_id" => $request->kursus_id,
            //"updated_at" => $today,
        ]);

        return back();
    }

    public function storeProgramKursus(Request $request)
    {


        ProgramKursus::create([
            "lokasi" => $request->lokasi,
            "tarikh" => date("Y-m-d", strtotime($request->tarikh)),
            "kursus_id" => $request->kursus_id,
            //"updated_at" => $today,
        ]);

        return back();
    }

    public function storePraktikalKursus(Request $request)
    {


        PraktikalKursus::create([
            "lokasi" => $request->lokasi,
            "tarikh" => date("Y-m-d", strtotime($request->tarikh)),
            "kursus_id" => $request->kursus_id,
            //"updated_at" => $today,
        ]);

        return back();
    }

    public function hantarKursus($kursus_id)
    {
        //dd($kursus_id);
        $today = date('Y-m-d');
        Kursus::where('id', $kursus_id)
            ->update([
                "ishantar" => 1,
                "updated_at" => $today,
            ]);

        return back();
    }

    public function getKursusByKlusterAndTarikh($tarikhMula, $tarikhAkhir, $klusterId)
    {
        return Kursus::where('kluster', $klusterId)
                ->where('tarikh_mula', '>=', $tarikhMula)
                ->where('tarikh_akhir', '<=', $tarikhAkhir)
                ->get();
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

    public function kursusById($id)
    {
        return Kursus::find($id)->first();
    }
}
