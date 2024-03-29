<?php 

namespace App\Repositories;

use App\Models\Article;

class ArticleRepository
{
    protected $entity;
    protected $totalPage = 10;

    public function __construct(Article $article)
    {
        $this->entity = $article;
    }

    public function getArticlesAll()
    {
        return $this->entity->paginate($this->totalPage);
    }

    public function getArticleById(int $id)
    {
        return $this->entity->where('id', $id)->firstOrfail();
    }

    public function createArticle(array $data): Article
    {        
        $this->entity->fill($data);
        $this->entity->launches = json_encode($data['launches']);
        $this->entity->events = json_encode($data['events']);
        $this->entity->save();
        return $this->entity;
    }

    public function updateArticle(array $data, int $id)
    {
        $articleUpdate = $this->entity->where('id', $id)->first();
        $articleUpdate->fill($data);
        return $articleUpdate->update($data);
        
    }

    public function deleteArticle($id): void
    {
        $article = $this->entity->where('id', $id)->first();
        $article->delete();
    }

    public function find(int $id)
    {
        return $this->entity->where('id', $id)->first();
    }
}