<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    protected $fillable = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    protected function readingTime(): Attribute
    {
        return Attribute::make(
            get: function (mixed $value, array $attributes) {
                $wordsPerMinute = 200;
                // strip_tags prevents HTML tags from being counted as words
                $wordCount = str_word_count(strip_tags($attributes['body']));
                
                $minutes = ceil($wordCount / $wordsPerMinute);
                
                return $minutes . ' min read';
            }
        );
    }
}
