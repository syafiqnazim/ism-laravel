<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\CreateNewUser;

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
        return view('pages/pendaftaran-pengguna', [
            // Specify the base layout.
            // Eg: 'side-menu', 'simple-menu', 'top-menu', 'login'
            // The default value is 'side-menu'

            'layout' => 'side-menu'
        ])->with(['roles' => Role::all()]);
    }

    public function senaraiPengguna(Request $request)
    {
        // dd($request->query()['name']);
        $users = User::all();
        $query = '';
        if(isset($request->query()['name'])) {
            $query = $request->query()['name'];
            $users = User::where('name', 'like', '%'.$query.'%')->get();
        }

        return view('pages/senarai-pengguna', [
            // Specify the base layout.
            // Eg: 'side-menu', 'simple-menu', 'top-menu', 'login'
            // The default value is 'side-menu'

            'layout' => 'side-menu'
        ])->with(['users' => $users, 'query' => $query]);
    }

    public function ubahPengguna($id)
    {
        return view('pages/ubah-pengguna', [
            // Specify the base layout.
            // Eg: 'side-menu', 'simple-menu', 'top-menu', 'login'
            // The default value is 'side-menu'

            'layout' => 'side-menu'
        ])->with(['user' => User::find($id), 'roles' => Role::all()]);
    }

    public function ubahKataLaluan($id)
    {
        return view('pages/ubah-kata-laluan', [
            // Specify the base layout.
            // Eg: 'side-menu', 'simple-menu', 'top-menu', 'login'
            // The default value is 'side-menu'

            'layout' => 'side-menu'
        ])->with(['user' => User::find($id)]);
    }
}
