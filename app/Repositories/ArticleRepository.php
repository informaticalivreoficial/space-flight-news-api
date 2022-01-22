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
        return $this->entity->paginate(10);
    }

    public function getArticleById(int $data)
    {
        return $this->entity->where('id', $data)->firstOrfail();
    }

    public function createArticle(array $data)
    {
        return $this->entity->create($data);
    }

    public function updateArticle(array $data)
    {
        return $this->entity->update($data);
    }
}