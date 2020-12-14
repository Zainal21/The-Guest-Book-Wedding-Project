<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $table = 'guest';
    protected $fillable = ['nama', 'email', 'acara_hadir', 'alamat'];
    public function message()
    {
        return $this->hasMany(Message::class, 'guest_id', 'id');
    }
}
