<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'city',
        'private',
        'user_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
