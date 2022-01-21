<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'id' => 1,
                'featured' => false,
                'title' => 'Bigelow Aerospace transfers BEAM space station module to NASA',
                'url' => 'https://spacenews.com/bigelow-aerospace-transfers-beam-space-station-module-to-nasa/',
                'imageUrl' => 'https://spacenews.com/wp-content/uploads/2016/05/blog_20151222-beam-01.jpg',
                'newsSite' => 'SpaceNews', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'summary' => 'NASA has hired a new company to provide engineering support for an inflatable module on the International Space Station originally built and managed by Bigelow Aerospace.'                
            ],
            [
                'id' => 2,
                'featured' => false,
                'title' => 'SpaceX rocket catch simulation raises more questions about concept',
                'url' => 'https://www.teslarati.com/spacex-rocket-catch-simulation-raises-questions/',
                'imageUrl' => 'https://www.teslarati.com/wp-content/uploads/2022/01/Super-Heavy-arm-catch-landing-sim-2022-SpaceX-sequence-1-c.jpg',
                'newsSite' => 'Teslarati', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'summary' => 'CEO Elon Musk has published the first official visualization of what SpaceX’s plans to catch Super Heavy boosters might look like in...'                
            ],
            [
                'id' => 3,
                'featured' => false,
                'title' => 'Rocket Report: SpaceX lands rocket cargo funding, Virgin Galactic’s stock crash',
                'url' => 'https://arstechnica.com/science/2022/01/rocket-report-spacex-lands-rocket-cargo-funding-virgin-galactics-stock-crash/',
                'imageUrl' => 'https://cdn.arstechnica.net/wp-content/uploads/2022/01/51828440767_04d09e2216_k.jpg',
                'newsSite' => 'Arstechnica', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'summary' => 'Everyone is safe and the team did an admirable job.'                
            ],
            [
                'id' => 4,
                'featured' => false,
                'title' => 'OneWeb forges Indian distribution partnership',
                'url' => 'https://spacenews.com/oneweb-forges-indian-distribution-partnership/',
                'imageUrl' => 'https://spacenews.com/wp-content/uploads/2021/12/ST37-liftoff-Photo-Credits-Roscosmos-TsENKI-11.jpeg',
                'newsSite' => 'SpaceNews', 
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'summary' => 'OneWeb has signed a deal to distribute broadband in India through a local partner as it hopes to get regulatory permission for its low Earth orbit services this year.'                
            ]
        ]);
    }
}
