<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konten;

class PagesController extends Controller
{
    public function index()
    {
        $data = Konten::all();
        return view('home', compact('data'));
    }

    public function about()
    {
        $data = Konten::all();
        return view('tentang', compact('data'));
    }

    public function portfolio()
    {
        return view('portfolio');
    }

}
