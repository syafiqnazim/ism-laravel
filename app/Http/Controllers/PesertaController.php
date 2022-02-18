<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePesertaRequest;
use App\Http\Requests\UpdatePesertaRequest;
use App\Models\Peserta;
use App\Models\Kursus;
use Auth;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kluster = $request->input('kluster');
        //echo $kluster;
        if(!empty($kluster)){

            $nama_kursus = $request->input('nama_kursus');
            if(!empty($kluster) && !empty($nama_kursus)){

                $kursuses = Kursus::where('kluster', $kluster)->get();
                //$kursuses = Kursus::all();


                $pesertas = Peserta::where('nama_kursus', $nama_kursus)->get();
                $query = '';

                if (isset($request->query()['name'])) {
                    $query = $request->query()['name'];
                    $pesertas = Peserta::where('name', 'like', '%' . $query . '%')->get();
                }

            }else{
                //$nama_kursus = $request->input('nama_kursus');
                $kursuses = Kursus::where('kluster', $kluster)->get();
                $pesertas='';
                $query = '';


            }

        }else{
            $kursuses = Kursus::all();
            $nama_kursus='';
            $pesertas='';
            $query = '';


        }

       //echo $nama_kursus;

        //dd($pesertas);


        return view('pages/peserta/index')->with(['pesertas' => $pesertas, 'kursuses' => $kursuses, 'query' => $query, 'kluster'=>$kluster, 'nama_kursus'=>$nama_kursus ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/peserta/create')->with(['kursuses' => Kursus::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePesertaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // var_dump($request->all());
        // die();
        try {
            Peserta::create([
                "nama_kursus" => $request->nama_kursus,
                "sector" => $request->sector,
                "title" => $request->title,
                "name" => $request->name,
                "ic_number" => $request->ic_number,
                "tarikh_lahir" => $request->tarikh_lahir,
                "gender" => $request->gender,
                "status_perkahwinan" => $request->status_perkahwinan,
                "kumpulan_isi_rumah" => $request->kumpulan_isi_rumah,
                "kategori_oku" => $request->kategori_oku,
                "position" => $request->position,
                "agensi" => $request->agensi,
                "kumpulan_isi_rumah" => $request->kumpulan_isi_rumah,
                "email" => $request->email,
                "tarikh_lantikan" => $request->tarikh_lantikan,
                "gred_jawatan" => $request->gred_jawatan,
                "working_address" => $request->working_address,
                "home_address" => $request->home_address,
                "working_number" => $request->working_number,
                "home_number" => $request->working_number,
                "fax_number" => $request->fax_number,
                "phone_number" => $request->phone_number,
                "highest_academic" => $request->highest_academic,
                "penyakit" => $request->penyakit,
                "alahan" => $request->alahan,
                "relative_name" => $request->relative_name,
                "pertalian" => $request->pertalian,
                "relative_address" => $request->relative_address,
                "relative_home_number" => $request->relative_home_number,
                "relative_phone_number" => $request->relative_phone_number,
            ]);
            if (Auth::user()) {
                return redirect('/pesertas');
            } else {
                return back();
            }

        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages/peserta/edit')->with(['peserta' => Peserta::find($id), 'kursuses' => Kursus::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePesertaRequest  $request
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Peserta::where('id', $id)
            ->update([
                "nama_kursus" => $request->nama_kursus,
                "sector" => $request->sector,
                "title" => $request->title,
                "name" => $request->name,
                "ic_number" => $request->ic_number,
                "tarikh_lahir" => $request->tarikh_lahir,
                "gender" => $request->gender,
                "status_perkahwinan" => $request->status_perkahwinan,
                "kumpulan_isi_rumah" => $request->kumpulan_isi_rumah,
                "kategori_oku" => $request->kategori_oku,
                "position" => $request->position,
                "agensi" => $request->agensi,
                "kumpulan_isi_rumah" => $request->kumpulan_isi_rumah,
                "email" => $request->email,
                "tarikh_lantikan" => $request->tarikh_lantikan,
                "gred_jawatan" => $request->gred_jawatan,
                "working_address" => $request->working_address,
                "home_address" => $request->home_address,
                "working_number" => $request->working_number,
                "home_number" => $request->home_number,
                "fax_number" => $request->fax_number,
                "phone_number" => $request->phone_number,
                "highest_academic" => $request->highest_academic,
                "penyakit" => $request->penyakit,
                "alahan" => $request->alahan,
                "relative_name" => $request->relative_name,
                "pertalian" => $request->pertalian,
                "relative_address" => $request->relative_address,
                "relative_home_number" => $request->relative_home_number,
                "relative_phone_number" => $request->relative_phone_number,
            ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peserta::find($id)->delete();
        return redirect()->back();
    }

    /**
     *  Get List of Peserta by program id
     *
     * @param int|string $id
     * @return Response $json
     */
    public function pesertaProgram($id)
    {
        return Peserta::where('nama_kursus', Kursus::find($id)->nama_kursus)->with('program', 'program.kursusKluster')->get();
    }
}
