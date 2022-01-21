<?php 

namespace App\Repositories;

use App\Models\Article;

class ArticleRepository
{
    protected $entity;

    public function __construct(Article $article)
    {
        $this->entity = $article;
    }

    public function getArticlesAll()
    {
        return $this->entity->get();
    }
}