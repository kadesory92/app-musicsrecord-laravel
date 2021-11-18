<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Playlist;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $playlists = Playlist::where('user_id', auth()->user()->id)->get();

        $albums=Album::with('playlists')->get();
        
        return view('dashboard', compact('playlists', 'albums'));
    }
    //
}
