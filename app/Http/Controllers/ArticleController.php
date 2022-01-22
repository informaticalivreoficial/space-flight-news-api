<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Services\ArticleService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function index()
    { 
        return response()->json("Back-end Challenge 2021 - Space Flight News", 200);   
    }

    public function articles()
    {
        $articles = ArticleResource::collection($this->articleService->getArticles())->collection; 
        return json_encode($articles, JSON_UNESCAPED_SLASHES);    
    }

    public function show($id)
    {
        $article = $this->articleService->getArticle($id); 
        return json_encode(new ArticleResource($article), JSON_UNESCAPED_SLASHES);    
    }

    public function store(Request $request)    {
        
        $articleCreate = $this->articleService->createArticle($request->all()); 
        return response()->json(new ArticleResource($articleCreate), 201);
    }

    public function update(Request $request)    {
        
        $articleUpdate = $this->articleService->updateArticle($request->all()); 
        return response()->json(new ArticleResource($articleUpdate), 201);
    }

    public function delete(Request $request)    {
        
        $articleUpdate = $this->articleService->updateArticle($request->all()); 
        return response()->json(new ArticleResource($articleUpdate), 201);
    }
}