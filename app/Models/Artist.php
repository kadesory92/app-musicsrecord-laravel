<?php

namespace App\Models;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function albums(){
        return $this->hasMany(Album::class);
    }
}
