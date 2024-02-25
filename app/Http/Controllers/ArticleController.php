<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articleController($idController)
    {
        return "Halaman artikel dengan ID {$idController}";
    }
}
