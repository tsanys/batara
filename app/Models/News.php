<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($news) {
            $news->removeImage();
        });
    }

    protected $fillable = [
        'user_id', 'title', 'slug', 'content', 'description', 'image', 'is_published'
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', 1)->latest();
    }

    public function scopeFilters($query, $search)
    {
        if ($search ?? false) {
            return $query->where('title', 'like', '%' . $search . '%');
        }
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    private function removeImage()
    {
        $image = str_replace('/storage', '/public', $this->image);
        $pathInfo = pathinfo($image);
        $directoryPath = rtrim($pathInfo['dirname'], '/');

        if ($this->image && Storage::exists($image)) {
            Storage::deleteDirectory($directoryPath);
        }
    }
}
