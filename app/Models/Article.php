<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model 
{
    protected $table = 'articles'; 

    public $timestamps = false;

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
        return $this->belongsTo(Event::class);
    }

    public function launch()
    {
        return $this->belongsTo(Launche::class, 'id', 'launches');
    }

}