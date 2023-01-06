<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'extract',
        'content',
        'image',
        'category',
        'author',
    ];

    public function authors()
    {
        return $this->belongsTo(User::class, 'author');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category');
    }

}
