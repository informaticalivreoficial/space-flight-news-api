<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Services\ArticleService;
use Illuminate\Http\Request;
use Throwable;

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
        $articles = ArticleResource::collection($this->articleService->getArticles()); 
        return json_encode($articles, JSON_UNESCAPED_SLASHES); 
    }

    public function show(int $id)
    {
        try {
            $article = $this->articleService->getArticle($id);            
            return json_encode(new ArticleResource($article), JSON_UNESCAPED_SLASHES);             
        } catch(Throwable $exception) {
            $code = $exception->getCode() == 0 ? 500 : $exception->getCode();
            return response()->json([
                'error' => $exception->getMessage()
            ], $code);
        }  
    }

    public function store(ArticleRequest $request)    
    { 
        $articleCreate = $this->articleService->createArticle($request->all());         
        return json_encode(new ArticleResource($articleCreate), JSON_UNESCAPED_SLASHES);
    }

    public function update(ArticleRequest $request, int $id)    
    {        
        $this->articleService->updateArticle($request->all(), $id); 
        return response()->json(['message' => 'updated'], 200);
    }

    public function delete(int $id)    
    {        
        try {
            $this->articleService->deleteArticle($id);
            return response()->json("Success!", 200);
        } catch(Throwable $exception) {
            $code = $exception->getCode() == 0 ? 500 : $exception->getCode();
            return response()->json([
                'error' => $exception->getMessage()
            ], $code);
        }
    }
}