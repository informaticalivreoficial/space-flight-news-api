<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model 
{
    protected $table = 'articles'; 
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'featured', 
        'title',
        'url',
        'imageUrl',
        'newsSite',
        'summary',
        'publishedAt',
        'launches',
        'events',
    ];

}