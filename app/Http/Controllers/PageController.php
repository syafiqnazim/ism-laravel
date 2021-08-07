<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Faker;

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
        ]);
    }
}
