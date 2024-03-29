<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'path'
    ];

    public function member()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
