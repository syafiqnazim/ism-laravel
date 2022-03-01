<?php

namespace App\Http\Controllers;

use App\Models\Kewangan;
use App\Models\Peserta;
use App\Models\Kluster;
use Illuminate\Http\Request;
use App\Models\Kursus;
use App\Models\Penceramah;
use Barryvdh\DomPDF\Facade\Pdf;

class KewanganController extends Controller
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
     * @param  \App\Models\Kewangan  $kewangan
     * @return \Illuminate\Http\Response
     */
    public function show(Kewangan $kewangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kewangan  $kewangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kewangan $kewangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kewangan  $kewangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kewangan $kewangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kewangan  $kewangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kewangan $kewangan)
    {
        //
    }


    public function kutipanYuran(Request $request)
    {
        $klusters = Kluster::all();
        $kursuses = Kursus::all();
        return view('pages.kewangan.kutipan.laporan', compact('kursuses', 'klusters'));
    }

    public function editKutipanYuran($id)
    {
        $kursus = Kursus::find($id);
        $participants = $kursus->participants;
        return view('pages.kewangan.kutipan.edit', compact('kursus', 'participants'));
    }

    public function cetakKutipanYuran($id) 
    {
        $compactValues = [];
        $kursus = Kursus::find($id);
        $compactValues[] = 'kursus';
        
        $paidParticipantsQuery = $kursus->participants();
        $freeParticipants = collect();
        if($kursus->is_free_b40) {
            $paidParticipantsQuery->where('kumpulan_isi_rumah', '<>', 'B40');
            $freeParticipants = $kursus->participants()->where('kumpulan_isi_rumah', 'B40')->get();
        }
        $paidParticipants = $paidParticipantsQuery->get();
        $compactValues[] = 'freeParticipants';
        $compactValues[] = 'paidParticipants';

        // return view('pages.Kewangan.Kutipan.pdf.laporan', compact($compactValues));
        $pdf = Pdf::loadView('pages.Kewangan.Kutipan.pdf.laporan', compact($compactValues));

        return $pdf->stream();
    }

    public function updateKutipanYuran($id, Request $request)
    {

        try {
            $kursus = Kursus::find($id);
            $kursus->fee = $request->fee;
            $kursus->is_free_b40 = $request->is_free_b40;
            $kursus->save();

            foreach($request->tarikhBayaran as $key => $tarikhBayaran) {
                if(($tarikhBayaran == null) && ($request->noResit[$key] == null)) {
                    continue;
                }
                $kursus->bayaranYuran()->updateOrcreate([
                    'peserta_id'    => $key
                ], [
                    'no_resit'      => $request->noResit[$key],
                    'tarikh_bayaran' => $tarikhBayaran,
                ]);
            }
            return response('OK', 200);
        } catch (\Exception $e) {
            report($e);
            return response(['error' => $e->getMessage()], 500);
        }
    }

    public function laporanProgram(Request $request)
    {
        $klusters = Kluster::all();
        return view('pages.kewangan.program.laporan', compact('klusters'));
    }

    public function cetakLaporanProgram($tarikh_mula, $tarikh_akhir, $id) {
        $compactValues = [];
        $compactValues[] = 'tarikh_mula';
        $compactValues[] = 'tarikh_akhir';

        $kluster = Kluster::find($id);
        $compactValues[] = 'kluster';

        $kursuses = $kluster->kursuses()->where('tarikh_mula', '>=', $tarikh_mula)
            ->where('tarikh_akhir', '<=', $tarikh_akhir)->get();
        $compactValues[] = 'kursuses';

        $pdf = Pdf::loadView('pages.Kewangan.Program.pdf.laporan', compact($compactValues));

        return $pdf->stream();
    }

    public function laporanPenceramah(Request $request)
    {
        $penceramahs = Penceramah::all();
        return view('pages.kewangan.penceramah.laporan', compact('penceramahs'));
    }
    public function laporanMakanMinum(Request $request)
    {
        $klusters = Kluster::all();
        $kursuses = Kursus::all();
        return view('pages.kewangan.makan-minum.laporan', compact('kursuses', 'klusters'));
    }
}
