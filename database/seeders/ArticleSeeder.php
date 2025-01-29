<?php

// app/Models/Article.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Specifica i campi che possono essere popolati tramite mass assignment
    protected $fillable = ['title', 'author', 'content', 'published_at'];
}
