<?php

namespace App\Models;

use App\Models\Post;
use App\Mail\Postsend;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $table = 'post';
    public function category(): BelongsTo
{
    return $this->belongsTo(Category::class, 'category_id');
}

     protected $guarded = [];

     protected static function booted(): void
     {
         static::created(function (Post $post) {
            Mail::to('kaungkaung034592@gmail.com')->send(new Postsend($post));
         });
     }

}
