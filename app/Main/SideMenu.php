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
        ];
    }
}
