<?php 

namespace App\Services;

use App\Repositories\ArticleRepository;

class ArticleService
{
    protected $articleRepository;    

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function getArticles()
    {
        return $this->articleRepository->getArticlesAll();
    }

    public function getArticle(int $data)
    {     
        return $this->articleRepository->getArticleById($data);
    }

    public function createArticle(array $data)    
    {        
        return $this->articleRepository->createArticle($data);
    }

    public function updateArticle(array $data, int $id)
    {        
        return $this->articleRepository->updateArticle($data, $id);
    }

    public function deleteArticle(int $id)
    {
        return $this->articleRepository->deleteArticle($id);
    }
}