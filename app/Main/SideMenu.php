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
                // 'params' => [
                //     'layout' => 'side-menu'
                // ],
                'title' => 'Pendaftaran Pengguna',
            ],
            'senarai-pengguna' => [
                'icon' => 'users',
                'route_name' => 'senarai-pengguna',
                // 'params' => [
                //     'layout' => 'side-menu'
                // ],
                'title' => 'Senarai Pengguna',
            ],
        ];
    }
}
