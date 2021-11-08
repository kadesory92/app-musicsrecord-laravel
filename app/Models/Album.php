<?php

namespace App\Models;

use App\Models\Artist;
use App\Models\Playlist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function artist(){
        return $this->belongsTo(Artist::class);
    }

    public function playlists(){
        return $this->belongsToMany(Playlist::class);
    }
}
