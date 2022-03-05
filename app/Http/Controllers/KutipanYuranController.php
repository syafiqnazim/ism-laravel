<?php

namespace App\Http\Controllers;

use App\Models\Kluster;
use App\Models\Kursus;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class KutipanYuranController extends Controller
{
    public function index(Request $request)
    {
        $klusters = Kluster::all();
        $kursuses = Kursus::all();
        return view('pages.kewangan.kutipan.laporan', compact('kursuses', 'klusters'));
    }

    public function edit($id)
    {
        $kursus = Kursus::find($id);
        $participants = $kursus->participants;
        return view('pages.kewangan.kutipan.edit', compact('kursus', 'participants'));
    }

    public function cetak($id)
    {
        ini_set('memory_limit','256M');
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

    public function update($id, Request $request)
    {
        try {
            $kursus = Kursus::find($id);
            $kursus->fee = $request->fee;
            $kursus->is_free_b40 = $request->is_free_b40;
            $kursus->save();
            // check kutipan_yurans table, for this specific program,
            // is no_resit in this request array, delete if not in request array_push
            foreach($kursus->bayaranYuran as $bayaranYuran) {
                if(!array_key_exists($bayaranYuran->peserta_id, $request->noResit) || ($request->noResit[$bayaranYuran->peserta_id] == null)) {
                    $bayaranYuran->delete();
                }

            }
            foreach($request->noResit as $key => $noResit) {
                if($noResit)
                $kursus->bayaranYuran()->updateOrcreate([
                    'peserta_id'    => $key
                ], [
                    'no_resit'      => $noResit,
                    'tarikh_bayaran' => $request->tarikhBayaran[$key],
                ]);
            }
            return response('OK', 200);
        } catch (\Exception $e) {
            report($e);
            return response(['error' => $e->getMessage()], 500);
        }
    }
}
