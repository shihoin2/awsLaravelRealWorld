<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\PostForm;

class Article extends Model
{
    use HasFactory;
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function postforms(): HasMany
    {
        return $this->hasMany(PostForm::class);
    }


    protected $fillable = [
        'id',
        'title',
        'slug',
        'summary',
        'body',
        'tagList',
        'created_at',
        'user_id'
    ];

    protected $attributes = [
        'user_id' => 2,
    ];

    protected $casts = [
        'tagList' => 'json'
    ];
}
