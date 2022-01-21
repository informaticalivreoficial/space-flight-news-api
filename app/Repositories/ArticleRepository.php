<?php 

namespace App\Repositories;

use App\Models\Article;

class ArticleRepository
{
    protected $entity;

    public function __construct(Article $entity)
    {
        $this->entity = $entity;
    }

    public function getArticlesAll()
    {
        return $this->entity->paginate(10);
    }
}