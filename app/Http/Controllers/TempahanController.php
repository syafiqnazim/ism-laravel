<?php

namespace App\Http\Controllers;

use App\Models\Tempahan;
use App\Models\Asrama;
use App\Models\Kluster;
use App\Models\Kursus;
use App\Models\TempahanKenderaan;
use App\Models\TempahanAsrama;
use App\Models\TempahanPesertaAsrama;
use App\Models\Role;
use App\Models\SenaraiKenderaan;
use App\Models\SenaraiPemandu;
use App\Models\Peserta;
use Illuminate\Http\Request;

class TempahanController extends Controller
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
     * @param  \App\Models\Tempahan  $tempahan
     * @return \Illuminate\Http\Response
     */
    public function show(Tempahan $tempahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tempahan  $tempahan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tempahan $tempahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tempahan  $tempahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tempahan $tempahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tempahan  $tempahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tempahan $tempahan)
    {
        //
    }

    public function bilikLatihan(Request $request)
    {
        $kursuses = Kursus::all();
        $query = '';
        if (isset($request->query()['nama_kursus'])) {
            $query = $request->query()['nama_kursus'];
            $kursuses = Kursus::where('nama_kursus', 'like', '%' . $query . '%')->get();
        }

        return view('pages/tempahan/bilik-latihan')->with(['roles' => Role::all(), 'kursuses' => $kursuses, 'query' => $query]);
    }

    public function kenderaan(Request $request)
    {
        $tempahan_kenderaans = TempahanKenderaan::all();
        $query_tempahan_kenderaan = '';
        if (isset($request->query()['nama_penempah'])) {
            $query_tempahan_kenderaan = $request->query()['nama_penempah'];
            $tempahan_kenderaans = TempahanKenderaan::where('nama_penempah', 'like', '%' . $query_tempahan_kenderaan . '%')->get();
        }

        $senarai_kenderaans = SenaraiKenderaan::all();
        $query_senarai_kenderaan = '';
        if (isset($request->query()['no_pendaftaran'])) {
            $query_tempahan_kenderaan = $request->query()['no_pendaftaran'];
            $senarai_kenderaans = SenaraiKenderaan::where('no_pendaftaran', 'like', '%' . $query_senarai_kenderaan . '%')->get();
        }

        $senarai_pemandus = SenaraiPemandu::all();
        $query_senarai_pemandu = '';
        if (isset($request->query()['nama_pemandu'])) {
            $query_senarai_pemandu = $request->query()['nama_pemandu'];
            $senarai_pemandus = SenaraiPemandu::where('nama_pemandu', 'like', '%' . $query_senarai_pemandu . '%')->get();
        }

        $kursuses = Kursus::all();

        return view('pages/tempahan/kenderaan')->with([
            'roles' => Role::all(),
            'tempahan_kenderaans' => $tempahan_kenderaans,
            'senarai_kenderaans' => $senarai_kenderaans,
            'senarai_pemandus' => $senarai_pemandus,
            'query_tempahan_kenderaan' => $query_tempahan_kenderaan,
            'query_senarai_kenderaan' => $query_senarai_kenderaan,
            'query_senarai_pemandu' => $query_senarai_pemandu
        ]);
    }

    public function tempahan1mtc(Request $request)
    {
        $kursuses = Kursus::all();
        $query = '';
        if (isset($request->query()['nama_kursus'])) {
            $query = $request->query()['nama_kursus'];
            $kursuses = Kursus::where('nama_kursus', 'like', '%' . $query . '%')->get();
        }

        return view('pages/tempahan/tempahan-1mtc')->with(['roles' => Role::all(), 'kursuses' => $kursuses, 'query' => $query]);
    }

    public function tempahanFasiliti(Request $request)
    {
        $kursuses = Kursus::all();
        $query = '';
        if (isset($request->query()['nama_kursus'])) {
            $query = $request->query()['nama_kursus'];
            $kursuses = Kursus::where('nama_kursus', 'like', '%' . $query . '%')->get();
        }

        return view('pages/tempahan/tempahan-1mtc')->with(['roles' => Role::all(), 'kursuses' => $kursuses, 'query' => $query]);
    }

    public function tempahanAsrama(Request $request)
    {
        $kursuses = Kursus::all();
        $tempahanAsramas = TempahanAsrama::all();
        $query = '';
        if (isset($request->query()['nama_kursus'])) {
            $query = $request->query()['nama_kursus'];
            $kursuses = Kursus::where('nama_kursus', 'like', '%' . $query . '%')->get();
        }

        if (isset($request->tarikh_masuk) && isset($request->tarikh_keluar) && isset($request->id_asrama) && isset($request->tempah)) {
            //dd($request->tempah);
            $tarikh_masuk = $request->tarikh_masuk;
            $tarikh_keluar = $request->tarikh_keluar;
            $id_asrama = $request->id_asrama;
            $peserta = $request->peserta;
            $kursus_id = $request->kursus_id;
           // $ary = $request->ary;
            $kapasiti_asrama = '';

            $asramas = Asrama::where('status','available')->get();
            $pesertas = Peserta::get();
            $step=3;

            //dd($peserta);

            //$values = $_POST['ary'];
            $tarikh_masuk = date("Y-m-d", strtotime($tarikh_masuk));
            $tarikh_keluar = date("Y-m-d", strtotime($tarikh_keluar));

            try {

               
                $checkExist = TempahanAsrama::where('asrama_id',$id_asrama)
                ->where('tarikh_masuk', '>=', $tarikh_masuk)
                ->where('tarikh_masuk', '<=', $tarikh_keluar)
                ->where('tarikh_keluar', '>=', $tarikh_masuk)
                ->where('tarikh_keluar', '<=', $tarikh_keluar)
                ->count();

                if($checkExist >0){
                    $step=1;
                }
                 
                $tempahanAsrama = new TempahanAsrama(); 
                $tempahanAsrama->tarikh_masuk = $tarikh_masuk;  
                $tempahanAsrama->tarikh_keluar = $tarikh_keluar;  
                $tempahanAsrama->asrama_id = $id_asrama;  
                $tempahanAsrama->kursus_id = $kursus_id;  
                $tempahanAsrama->save();

                $insertedId = $tempahanAsrama->id;

                foreach ($peserta as $a){
                    echo $a;
                    TempahanPesertaAsrama::create([
                        "tempahan_asrama_id" => $insertedId,
                        "peserta_id" => $a, 
                    ]);
                }
    
                return back();
            } catch (\Throwable $th) {
                dd($th);
            }

            
            /*
            foreach ($ary as $b){
                echo $b;
            }
            */

            exit();

        }else if (isset($request->tarikh_masuk) && isset($request->tarikh_keluar) && isset($request->id_asrama)) {
            //$tarikh_masuk = $request->tarikh_masuk;
            //$tarikh_keluar = $request->tarikh_keluar;
            $tarikh_masuk = date("Y-m-d", strtotime($request->tarikh_masuk));
            $tarikh_keluar = date("Y-m-d", strtotime($request->tarikh_keluar));
            $id_asrama = $request->id_asrama;

            $kapasiti_asrama = Asrama::where('id',$id_asrama)->select('kapasiti')->first();

            $asramas = Asrama::where('status','available')->get();
            $pesertas = Peserta::get();
            $step=2;

            /*

            $checkExist = TempahanAsrama::where('asrama_id',$id_asrama)
            ->where('tarikh_masuk', '>=', $tarikh_masuk) 
            ->where('tarikh_keluar', '<=', $tarikh_keluar)
            //->where('tarikh_masuk', '>=', $tarikh_masuk)
            //->where('tarikh_masuk', '<=', $tarikh_keluar)
            //->where('tarikh_keluar', '>=', $tarikh_masuk)
            //->where('tarikh_keluar', '<=', $tarikh_keluar)
            ->count();
           */
          $checkExist = TempahanAsrama::where('asrama_id',$id_asrama)->where(function ($query) use ($tarikh_masuk, $tarikh_keluar) {
            $query->where(function ($query) use ($tarikh_masuk, $tarikh_keluar) {
                $query->where('tarikh_masuk', '<=', $tarikh_masuk)
                    ->where('tarikh_keluar', '>=', $tarikh_masuk);
                })->orWhere(function ($query) use ($tarikh_masuk, $tarikh_keluar) {
                $query->where('tarikh_masuk', '<=', $tarikh_keluar)
                    ->where('tarikh_keluar', '>=', $tarikh_keluar);
                })->orWhere(function ($query) use ($tarikh_masuk, $tarikh_keluar) {
                $query->where('tarikh_masuk', '>=', $tarikh_masuk)
                    ->where('tarikh_keluar', '<=', $tarikh_keluar);
                });
            })->count();

            if($checkExist > 0){
                $step=1;
                \Session::flash('msg_error', 'Tempahan bilik pada tarikh tersebut telah wujud.'); 
            }

           //dd($checkExist);
          // return back()->with('msg_error','New product included, go to next step.');
          

        }else if (isset($request->tarikh_masuk) && isset($request->tarikh_keluar)) {
            $tarikh_masuk = $request->tarikh_masuk;
            $tarikh_keluar = $request->tarikh_keluar;
            $id_asrama = '';

            $kapasiti_asrama = '';

            $asramas = Asrama::where('status','available')->get();
            $pesertas = Peserta::get();
            $step=1;

            $tarikh_masuk = date("Y-m-d", strtotime($tarikh_masuk));
            $tarikh_keluar = date("Y-m-d", strtotime($tarikh_keluar));

            $checkExist = TempahanAsrama::
            where('tarikh_masuk', '>=', $tarikh_masuk)
            ->where('tarikh_masuk', '<=', $tarikh_keluar)
            ->where('tarikh_keluar', '>=', $tarikh_masuk)
            ->where('tarikh_keluar', '<=', $tarikh_keluar)
            ->count();

            //dd($checkExist);
            
        }else{
            $tarikh_masuk = '';
            $tarikh_keluar ='';
            $id_asrama = '';
            $kapasiti_asrama = '';

            $asramas = Asrama::where('status','available')->get();
            $pesertas = Peserta::get();
            $step=1;
            
        }
        //dd($kapasiti_asrama->kapasiti);
        //dd($pesertas);

        return view('pages/tempahan/tempahan-asrama')->with(
        [
            'roles' => Role::all(), 
            'kursuses' => $kursuses, 
            'tarikh_masuk' => $tarikh_masuk, 
            'tarikh_keluar' => $tarikh_keluar, 
            'asramas' => $asramas, 
            'pesertas' => $pesertas, 
            'id_asrama' => $id_asrama, 
            'kapasiti_asrama' => $kapasiti_asrama, 
            'step' => $step, 
            'query' => $query,
            'tempahanAsramas' => $tempahanAsramas,
        
        ]);
    }

    public function tempahanAsramaDestroy($id)
    {
        TempahanAsrama::find($id)->delete();
        TempahanPesertaAsrama::where('tempahan_asrama_id',$id)->delete();
        return back();
    }

    public function tempahanPeralatanIct(Request $request)
    {
        $kursuses = Kursus::all();
        $query = '';
        if (isset($request->query()['nama_kursus'])) {
            $query = $request->query()['nama_kursus'];
            $kursuses = Kursus::where('nama_kursus', 'like', '%' . $query . '%')->get();
        }

        return view('pages/tempahan/tempahan-1mtc')->with(['roles' => Role::all(), 'kursuses' => $kursuses, 'query' => $query]);
    }

    public function tempahanMakanMinum(Request $request)
    {
        $klusters = Kluster::all();
        $kursuses = Kursus::all();
        return view('pages.Tempahan.Makan-minum.index', compact('klusters', 'kursuses'));
    }
}
