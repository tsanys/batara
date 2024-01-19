<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'administrative_cost', 'principal_saving', 'mandatory_saving', 'special_mandatory_saving'
    ];

    public function members()
    {
        return $this->hasMany(User::class, 'member_type_id', 'id');
    }
}
