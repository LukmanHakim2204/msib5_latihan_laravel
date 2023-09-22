<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nama = 'Lukman Hakim';
        $tanggal_lahir = '22-04-2002';
        $umur = '21';
        $hobby = 'Bermain Game Dan Nonton Film';
        $alamat = 'Cirebon-Jawa Barat';

        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['tanggal_lahir'] = $tanggal_lahir;
        $data['hobby'] = $hobby;
        $data['alamat'] = $alamat;

        return view('profile/index', $data);
    }
}
