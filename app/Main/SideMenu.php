<?php

namespace App\Main;

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
        return [
            [
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
                'title' => 'Pengurusan Kursus',
                'label' => 'header'
            ],
            'pendaftaran-kursus' => [
                'icon' => 'file-text',
                'route_name' => 'pendaftaran-kursus',
                'title' => 'Pendaftaran Kursus',
            ],
            'penjadualan-kursus' => [
                'icon' => 'calendar',
                'route_name' => 'penjadualan-kursus',
                'title' => 'Penjadualan Kursus',
            ],
            'profil-penceramah' => [
                'icon' => 'smile',
                'route_name' => 'profil-penceramah',
                'title' => 'Profil Penceramah',
            ],
            'laporan-kursus' => [
                'icon' => 'folder',
                'route_name' => 'laporan-kursus',
                'title' => 'Laporan Kursus',
            ],
            [
                'title' => 'Pengurusan Aset',
                'label' => 'header'
            ],
            'tempahan-dalaman' => [
                'icon' => 'calendar',
                'route_name' => 'tempahan-dalaman',
                'title' => 'Tempahan Dalaman',
            ],
            'pengurusan-asrama' => [
                'icon' => 'home',
                'route_name' => 'pengurusan-asrama',
                'title' => 'Pengurusan Asrama',
            ],
            'tempahan-khusus' => [
                'icon' => 'calendar',
                'route_name' => 'tempahan-khusus',
                'title' => 'Tempahan Khusus',
            ],
            'pengurusan-ict' => [
                'icon' => 'monitor',
                'route_name' => 'pengurusan-ict',
                'title' => 'Pengurusan ICT',
            ],
            'senarai-tugasan' => [
                'icon' => 'tool',
                'route_name' => 'senarai-tugasan',
                'title' => 'Senarai Tugasan',
            ],
            'penugasan-penyelenggara' => [
                'icon' => 'user',
                'route_name' => 'penugasan-penyelenggara',
                'title' => 'Penugasan Penyelenggara',
            ],
            [
                'title' => 'Pengurusan Tempahan',
                'label' => 'header'
            ],
            'bilik-latihan' => [
                'icon' => 'user',
                'route_name' => 'bilik-latihan',
                'title' => 'Bilik Latihan',
            ],
            'kenderaan' => [
                'icon' => 'user',
                'route_name' => 'kenderaan',
                'title' => 'Kenderaan',
            ],
            'tempahan-1mtc' => [
                'icon' => 'user',
                'route_name' => 'tempahan-1mtc',
                'title' => 'Tempahan 1MTC',
            ],
            [
                'title' => 'Kewangan',
                'label' => 'header'
            ],
            'kutipan' => [
                'icon' => 'dollar-sign',
                'route_name' => 'kutipan',
                'title' => 'Kutipan',
            ],
            [
                'title' => 'Aduan',
                'label' => 'header'
            ],
            'aduan' => [
                'icon' => 'flag',
                'route_name' => 'aduan',
                'title' => 'Aduan',
            ],
        ];
    }
}
