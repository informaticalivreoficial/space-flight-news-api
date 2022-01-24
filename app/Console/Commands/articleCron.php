<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Services\ArticleService;
use Illuminate\Console\Command;

class articleCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'article:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $json = json_decode(file_get_contents('https://api.spaceflightnewsapi.net/v3/articles'), true);
        
        if($json[0]['id'] > 13689){
            $article = [
                'title' => $json[0]['title'],
                'url' => $json[0]['url'],
                'imageUrl' => $json[0]['imageUrl'],
                'newsSite' => $json[0]['newsSite'],
                'summary' => $json[0]['summary'],
                'launches' => json_encode($json[0]['launches']),
                'events' => json_encode($json[0]['events'])
            ];
            $articleCreate = Article::create($article);
            $this->info('Cron rodando com êxito 1 novo cadastro!');
        }else{
            $this->info('Cron rodando com êxito sem dados!');
        } 
        
    }
}
