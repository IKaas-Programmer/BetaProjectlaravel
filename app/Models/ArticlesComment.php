<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Models\Comments;

class ArticlesComment extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'article_id',
        'comment',

    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function article()
    {
        return $this->belongsTo(Articles::class, 'article_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }
    public function comments(): MorphMany
    {
        return $this->morphMany(Comments::class, 'commentable');
    }
}