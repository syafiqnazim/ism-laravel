<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\Kursus;
use App\Models\ObjektifKursus;
use App\Models\Penceramah;
use App\Models\SubmodulKursus;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function papanPemuka()
    {
        return view('pages/error/construction-page');
    }

    public function pendaftaranPengguna()
    {
        return view('pages/pendaftaran-pengguna')->with(['roles' => Role::all()]);
    }

    public function senaraiPengguna(Request $request)
    {
        // dd($request->query()['name']);
        $users = User::all();
        $query = '';
        if (isset($request->query()['name'])) {
            $query = $request->query()['name'];
            $users = User::where('name', 'like', '%' . $query . '%')->get();
        }

        return view('pages/senarai-pengguna')->with(['users' => $users, 'query' => $query]);
    }

    public function ubahPengguna($id)
    {
        return view('pages/ubah-pengguna')->with(['user' => User::find($id), 'roles' => Role::all()]);
    }

    public function ubahKataLaluan($id)
    {
        return view('pages/ubah-kata-laluan')->with(['user' => User::find($id)]);
    }

    public function pendaftaranKursus(Request $request)
    {
        $submodul_kursuses = SubmodulKursus::all();
        $objektif_kursuses = ObjektifKursus::all();
        $kursuses = Kursus::all();
        $all_query = array();

        if (isset($request->query()['kursus_id'])) {
            array_push($all_query, $request->query()['kursus_id']);
            $submodul_kursuses = SubmodulKursus::where('kursus_id', $request->query()['kursus_id'])->get();
            $objektif_kursuses = ObjektifKursus::where('kursus_id', $request->query()['kursus_id'])->get();
        };

        $query = '';
        if (isset($request->query()['nama_kursus'])) {
            $query = $request->query()['nama_kursus'];
            $kursuses = Kursus::where('nama_kursus', 'like', '%' . $query . '%')->get();
        }

        $objektif_kursuses_query = '';
        if (isset($request->query()['objektif_kursus'])) {
            dd($_GET);
            array_push($_GET, $request->query()['objektif_kursus']);
            $objektif_kursuses_query = $request->query()['objektif_kursus'];
            $objektif_kursuses = ObjektifKursus::where('objektif_kursus', 'like', '%' . $objektif_kursuses_query . '%')->get();
        }

        $submodul_kursuses_query = '';
        if (isset($request->query()['nama_submodul'])) {
            $submodul_kursuses_query = $request->query()['nama_submodul'];
            $submodul_kursuses = SubmodulKursus::where('nama_submodul', 'like', '%' . $submodul_kursuses_query . '%')->get();
        }

        return view('pages/kursus/pendaftaran-kursus')->with([
            'roles' => Role::all(),
            'kursuses' => $kursuses,
            'submodul_kursuses' => $submodul_kursuses,
            'objektif_kursuses' => $objektif_kursuses,
            'query' => $query,
            'objektif_kursuses_query' => $objektif_kursuses_query,
            'submodul_kursuses_query' => $submodul_kursuses_query
        ]);
    }

    public function penjadualanKursus(Request $request)
    {
        $kursuses = Kursus::all();
        $query = '';
        if (isset($request->query()['nama_kursus'])) {
            $query = $request->query()['nama_kursus'];
            $kursuses = Kursus::where('nama_kursus', 'like', '%' . $query . '%')->get();
        }

        return view('pages/kursus/penjadualan-kursus')->with(['roles' => Role::all(), 'kursuses' => $kursuses, 'query' => $query]);
    }

    public function laporanKursus(Request $request)
    {
        $kursuses = Kursus::all();
        $query = '';
        if (isset($request->query()['nama_kursus'])) {
            $query = $request->query()['nama_kursus'];
            $kursuses = Kursus::where('nama_kursus', 'like', '%' . $query . '%')->get();
        }

        return view('pages/kursus/laporan-kursus')->with(['roles' => Role::all(), 'kursuses' => $kursuses, 'query' => $query]);
    }
}
