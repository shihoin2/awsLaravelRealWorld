<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostForm extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'comment',
        'article_id',
        'user_id',
    ];

    protected $attributes = [
        'user_id' => 3,
    ];
}
