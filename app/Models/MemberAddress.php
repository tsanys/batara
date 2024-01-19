<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ktp_address',
        'ktp_regency',
        'ktp_distric',
        'ktp_subdistric',
        'current_address',
        'current_regency',
        'current_distric',
        'current_subdistric',
        'latitude',
        'longitude',
    ];

    public function member()
    {
        return $this->belongsTo(User::class);
    }
}
