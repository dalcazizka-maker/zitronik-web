<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery; // Propojení s databází fotek

class HomeController extends Controller
{
    public function index()
    {
        // Vytáhneme 3 nejnovější viditelné fotky z galerie
        $latestPhotos = Gallery::where('is_visible', true)
                               ->orderBy('created_at', 'desc')
                               ->take(3)
                               ->get();

        // Pošleme je do view 'welcome'
        return view('welcome', compact('latestPhotos'));
    }
}