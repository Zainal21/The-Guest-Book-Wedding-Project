<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Embed extends Model
{
    use HasFactory;
    protected $table = 'maps_embed';
    protected $fillable = ['embed_maps'];
}
