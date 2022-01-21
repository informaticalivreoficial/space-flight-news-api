<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model 
{
    use HasFactory;

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

    /**
     * Relacionamentos
     */
    public function event()
    {
        return $this->hasOne(Event::class, 'id', 'events');
    }

    public function launch()
    {
        return $this->hasOne(Launche::class, 'id', 'launches');
    }

}