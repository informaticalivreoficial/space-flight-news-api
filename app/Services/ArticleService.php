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
        //dd($data['url']);
        return $this->articleRepository->createArticle($data);
    }

    public function updateArticle(array $data)
    {
        return $this->articleRepository->updateArticle($data);
    }
}