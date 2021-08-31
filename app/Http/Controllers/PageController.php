<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\Kursus;
use App\Models\Penceramah;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $kursuses = Kursus::all();
        $query = '';
        if (isset($request->query()['nama_kursus'])) {
            $query = $request->query()['nama_kursus'];
            $kursuses = Kursus::where('nama_kursus', 'like', '%' . $query . '%')->get();
        }

        return view('pages/kursus/pendaftaran-kursus')->with(['roles' => Role::all(), 'kursuses' => $kursuses, 'query' => $query]);
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

    public function profilPenceramah(Request $request)
    {
        $penceramah = Penceramah::all();
        $query = '';
        if (isset($request->query()['name'])) {
            $query = $request->query()['name'];
            $penceramah = Penceramah::where('name', 'like', '%' . $query . '%')->get();
        }

        return view('pages/kursus/profil-penceramah')->with(['roles' => Role::all(), 'penceramahs' => $penceramah, 'query' => $query]);
    }
}
