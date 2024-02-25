<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutController()
    {
        $namaC = 'Hana Sugianto';
        $nimC = '2241720102';
        return "Nama : $namaC <br> NIM : $nimC";
    }
}
