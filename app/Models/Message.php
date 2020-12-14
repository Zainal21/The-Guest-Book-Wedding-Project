<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table = 'message';
    protected $fillable = ['guest_id', 'pesan', 'no_hp'];
    public function guest()
    {
        return $this->belongsTo(Guest::class, 'guest_id', 'id');
    }
}
