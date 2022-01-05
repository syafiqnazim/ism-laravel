<?php

namespace App\Main;

use Auth;

class SideMenu
{
    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        $menu = [];
        if (Auth::user()) {
            $menu = [
                [
                    // LABEL: HEADER MENU
                    'title' => 'Menu',
                    'label' => 'header'
                ],
                'papan-pemuka' => [
                    'icon' => 'home',
                    'route_name' => 'papan-pemuka',
                    'title' => 'Papan Pemuka',
                ],
                [
                    // LABEL: HEADER PENGURUSAN PENGGUNA
                    'title' => 'Pengurusan Pengguna',
                    'label' => 'header'
                ],
                'pendaftaran-pengguna' => [
                    'icon' => 'user-plus',
                    'route_name' => 'pendaftaran-pengguna',
                    'title' => 'Pendaftaran Pengguna',
                ],
                'senarai-pengguna' => [
                    'icon' => 'users',
                    'route_name' => 'senarai-pengguna',
                    'title' => 'Senarai Pengguna',
                ],
                [
                    // LABEL: HEADER PENGURUSAN KURSUS
                    'title' => 'Pengurusan Program',
                    'label' => 'header'
                ],
                'pendaftaran-kursus' => [
                    'icon' => 'file-text',
                    'route_name' => 'pendaftaran-kursus',
                    'title' => 'Pendaftaran Program',
                ],
                'penjadualan-kursus' => [
                    'icon' => 'calendar',
                    'route_name' => 'penjadualan-kursus',
                    'title' => 'Penjadualan Program',
                ],
                'rating-kursus' => [
                    'icon' => 'star',
                    'route_name' => 'rating-kursus',
                    'title' => 'Rating Program',
                ],
                [
                    // LABEL: HEADER PENGURUSAN PENCERAMAH
                    'title' => 'Pengurusan Penceramah',
                    'label' => 'header'
                ],
                'profil-penceramah' => [
                    'icon' => 'smile',
                    'route_name' => 'profil-penceramah',
                    'title' => 'Profil Penceramah',
                ],
                'kredit-penceramah' => [
                    'icon' => 'smile',
                    'route_name' => 'kredit-penceramah',
                    'title' => 'Kredit Penceramah',
                ],
                'rating-penceramah' => [
                    'icon' => 'star',
                    'route_name' => 'rating-penceramah.index',
                    'title' => 'Rating Penceramah',
                ],
                [
                    // LABEL: HEADER PENGURUSAN PESERTA
                    'title' => 'Pengurusan Peserta',
                    'label' => 'header'
                ],
                'peserta.create' => [
                    'icon' => 'smile',
                    'route_name' => 'peserta.create',
                    'title' => 'Daftar Peserta',
                ],
                'peserta.index' => [
                    'icon' => 'smile',
                    'route_name' => 'peserta.index',
                    'title' => 'Senarai Peserta',
                ],
                [
                    // LABEL: HEADER PENGURUSAN TEMPAHAN
                    'title' => 'Pengurusan Tempahan',
                    'label' => 'header'
                ],
                'tempahan-kursus' => [
                    'icon' => 'calendar',
                    'route_name' => 'tempahan-kursus',
                    'title' => 'Tempahan Program',
                ],
                // 'tempahan-fasiliti' => [
                //     'icon' => 'calendar',
                //     'route_name' => 'tempahan-fasiliti',
                //     'title' => 'Tempahan Fasiliti',
                // ],
                'kenderaan' => [
                    'icon' => 'user',
                    'route_name' => 'kenderaan',
                    'title' => 'Tempahan Kenderaan',
                ],
                'tempahan-asrama' => [
                    'icon' => 'calendar',
                    'route_name' => 'tempahan-asrama',
                    'title' => 'Tempahan Asrama',
                ],
                'tempahan-peralatan-ict' => [
                    'icon' => 'calendar',
                    'route_name' => 'tempahan-peralatan-ict',
                    'title' => 'Tempahan Peralatan ICT',
                ],
                [
                    // LABEL: HEADER PENGURUSAN SIJIL
                    'title' => 'Pengurusan Sijil',
                    'label' => 'header'
                ],
                'pengurusan-maklumat-sijil' => [
                    'icon' => 'calendar',
                    'route_name' => 'pengurusan-maklumat-sijil',
                    'title' => 'Pengurusan Maklumat Sijil',
                ],
                'cetak-sijil' => [
                    'icon' => 'calendar',
                    'route_name' => 'cetak-sijil',
                    'title' => 'Cetak Sijil',
                ],
                [
                    // LABEL: HEADER KEWANGAN
                    'title' => 'Kewangan',
                    'label' => 'header'
                ],
                'laporan-bayaran-kursus' => [
                    'icon' => 'calendar',
                    'route_name' => 'laporan-bayaran-kursus',
                    'title' => 'Laporan Bayaran Program',
                ],
                'laporan-bayaran-penceramah' => [
                    'icon' => 'calendar',
                    'route_name' => 'laporan-bayaran-penceramah',
                    'title' => 'Laporan Bayaran Penceramah',
                ],
                [
                    // LABEL: HEADER PENGURUSAN ASET
                    'title' => 'Pengurusan Aset',
                    'label' => 'header'
                ],
                [
                    // LABEL: HEADER PENGURUSAN ASRAMA
                    'title' => 'Pengurusan Asrama',
                    'label' => 'header'
                ],
                'pengurusan-bilik' => [
                    'icon' => 'home',
                    'route_name' => 'pengurusan-bilik',
                    'title' => 'Pengurusan Bilik',
                ],
                'jadual-bilik' => [
                    'icon' => 'home',
                    'route_name' => 'jadual-bilik',
                    'title' => 'Jadual Bilik',
                ],
                [
                    // LABEL: HEADER PENGURUSAN KENDERAAN
                    'title' => 'Pengurusan Kenderaan',
                    'label' => 'header'
                ],
                'pengurusan-kenderaan' => [
                    'icon' => 'home',
                    'route_name' => 'pengurusan-kenderaan',
                    'title' => 'Pengurusan Kenderaan',
                ],
                'jadual-kenderaan' => [
                    'icon' => 'home',
                    'route_name' => 'jadual-kenderaan',
                    'title' => 'Jadual Kenderaan',
                ],
                [
                    // LABEL: HEADER PENGURUSAN ICT
                    'title' => 'Pengurusan ICT',
                    'label' => 'header'
                ],
                'aduan' => [
                    'icon' => 'flag',
                    'route_name' => 'aduan',
                    'title' => 'Pengurusan Aduan',
                ],
                'penugasan-penyelenggara' => [
                    'icon' => 'user',
                    'route_name' => 'penugasan-penyelenggara',
                    'title' => 'Penugasan Penyelenggara',
                ],
                'pengurusan-ict' => [
                    'icon' => 'monitor',
                    'route_name' => 'pengurusan-ict',
                    'title' => 'Pengurusan Aset ICT',
                ],
                'tetapan-sistem' => [
                    'icon' => 'monitor',
                    'route_name' => 'tetapan-sistem',
                    'title' => 'Tetapan Sistem',
                ],
                [
                    // LABEL: HEADER LAPORAN
                    'title' => 'Laporan',
                    'label' => 'header'
                ],
                'laporan-kursus' => [
                    'icon' => 'folder',
                    'route_name' => 'laporan-kursus',
                    'title' => 'Laporan Program',
                ],











                // 'tempahan-dalaman' => [
                //     'icon' => 'calendar',
                //     'route_name' => 'tempahan-dalaman',
                //     'title' => 'Tempahan Dalaman',
                // ],

                // [
                //     // LABEL: HEADER
                //     'title' => 'Pengurusan Aset',
                //     'label' => 'header'
                // ],

                // 'senarai-tugasan' => [
                //     'icon' => 'tool',
                //     'route_name' => 'senarai-tugasan',
                //     'title' => 'Senarai Tugasan',
                // ],

                // [
                //     // LABEL: HEADER
                //     'title' => 'Pengurusan Tempahan',
                //     'label' => 'header'
                // ],
                // 'bilik-latihan' => [
                //     'icon' => 'user',
                //     'route_name' => 'bilik-latihan',
                //     'title' => 'Bilik Latihan',
                // ],

                // 'tempahan-1mtc' => [
                //     'icon' => 'user',
                //     'route_name' => 'tempahan-1mtc',
                //     'title' => 'Tempahan 1MTC',
                // ],
                // [
                //     // LABEL: HEADER
                //     'title' => 'Kewangan',
                //     'label' => 'header'
                // ],
                // 'kutipan' => [
                //     'icon' => 'dollar-sign',
                //     'route_name' => 'kutipan',
                //     'title' => 'Kutipan',
                // ],

            ];
        } else {
            $menu = [
                [
                    // LABEL: HEADER PENGURUSAN PESERTA
                    'title' => 'Pengurusan Peserta',
                    'label' => 'header'
                ],
                'peserta.create' => [
                    'icon' => 'smile',
                    'route_name' => 'peserta.create',
                    'title' => 'Daftar Peserta',
                ],
            ];
        }
        return $menu;
    }
}
