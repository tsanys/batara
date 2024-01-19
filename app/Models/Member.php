<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_type_id', 'nik', 'fullname', 'nickname', 'phone', 'token'
    ];

    public function scopeFilters($query, $search)
    {
        if ($search ?? false) {
            return $query->where(function ($query) use ($search) {
                $query->where('nik', 'like', '%' . $search . '%')
                    ->orWhere('fullname', 'like', '%' . $search . '%');
            });
        }
    }

    public function detail()
    {
        return $this->hasOne(MemberDetail::class);
    }

    public function address()
    {
        return $this->hasOne(MemberAddress::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function type()
    {
        return $this->belongsTo(MemberType::class, 'member_type_id', 'id');
    }
}
