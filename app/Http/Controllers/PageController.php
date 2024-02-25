<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexController()
    {
        return "Selamat Datang!";
    }

    public function aboutController()
    {
        $namaC = 'Hana Sugianto';
        $nimC = '2241720102';
        return "Nama : $namaC <br> NIM : $nimC";
    }

    public function articlesController($idController)
    {
        return "Halaman artikel dengan ID {$idController}";
    }
}
