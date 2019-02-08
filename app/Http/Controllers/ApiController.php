<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getNavBar(Request $request) {
        $id = $request->id;

        $nav_bar_arr = [
            'logo' => '',
            'link' => [], //anchor => title
        ]; 

        switch ($id) {
            case 'subaga-inti-milenia':
                $nav_bar_arr['link'] = [
                    'service' => 'Profil',
                    'portfolio' => 'Portfolio',
                    'contact' => 'Contact'
                ];
                break;
            
            default:
                $nav_bar_arr['link'] = [
                    'service' => 'Profil',
                    'anak' => 'Anak Perusahaan',
                    'team' => 'Layanan',
                    'portfolio' => 'Portfolio',
                    'contact' => 'Contact',
                ];
                break;
        }

        return $nav_bar_arr;
    }
}