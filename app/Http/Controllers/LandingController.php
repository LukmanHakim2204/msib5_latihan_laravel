<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deskripsi = 'Perkenalkan Nama Saya Lukman Hakim , Saya sedang bersemangat belajar menjadi fullstack developer di PT GITS.ID. Saya sedang mempelajari berbagai teknologi dan keterampilan yang dibutuhkan untuk mengembangkan aplikasi web dari awal hingga akhir. Dengan bimbingan ahli dan sumber daya yang tersedia di PT GITS.ID, Saya berusaha memahami baik bagian frontend developer maupun backend developer dari pengembangan perangkat lunak untuk menjadi seorang  fullstack developer yang kompeten dan dapat berkontribusi dalam dunia teknologi informasi.';

        $data['deskripsi'] = $deskripsi;
        return view('landing/index', $data);
    }
}
