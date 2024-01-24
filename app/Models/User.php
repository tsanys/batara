<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'member_type_id',
        'nik',
        'fullname',
        'nickname',
        'phone',
        'remember_token',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
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
        return $this->hasMany(Document::class, 'user_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(MemberType::class, 'member_type_id', 'id');
    }

    public function news()
    {
        return $this->hasMany(News::class, 'user_id', 'id');
    }
}
