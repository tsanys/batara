<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class MemberDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        "gender",
        "religion",
        "place_of_birth",
        "date_of_birth",
        "education",
        "competence",
        "married_status",
        "npwp_status",
        "home_ownership_status",
        "administrative_cost",
        "principal_saving",
        "mandatory_saving",
        "special_mandatory_saving"
    ];

    public function member()
    {
        return $this->belongsTo(User::class);
    }

    public function getAdministrativeCostAttribute($value)
    {
        return Number::currency($value, in: 'IDR');
    }

    public function getPrincipalSavingAttribute($value)
    {
        return Number::currency($value, in: 'IDR');
    }

    public function getMandatorySavingAttribute($value)
    {
        return Number::currency($value, in: 'IDR');
    }

    public function getSpecialMandatorySavingAttribute($value)
    {
        return Number::currency($value, in: 'IDR');
    }

    public function getDateOfBirthAttribute($value)
    {
        return Carbon::parse($value, 'Asia/Makassar')->translatedFormat('j F Y');
    }
}
