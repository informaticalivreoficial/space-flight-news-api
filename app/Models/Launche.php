<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Launche extends Model 
{  
    protected $table = 'launches'; 

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'provider', 
    ];

    /**
     * Relacionamentos
     */
    public function article()
    {
        return $this->hasMany(Article::class);
    }

}