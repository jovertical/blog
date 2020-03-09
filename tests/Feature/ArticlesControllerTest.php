<?php

namespace Tests\Feature;

use App\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use NunoMaduro\LaravelMojito\InteractsWithViews;
use Tests\TestCase;

class ArticlesControllerTest extends TestCase
{
    use RefreshDatabase, InteractsWithViews;

    /** @test */
    public function it_displays_list_of_articles()
    {
        factory(Article::class, 5)->create();

        $this->get('/articles')
            ->assertOk()
            ->assertView('articles.index')
            ->in('#articles')
            ->first('.article')
            ->first('h2')
            ->contains(Article::orderByDesc('published_at')->first()->title);

        $this->get('/articles')
            ->assertOk()
            ->assertView('articles.index')
            ->in('#footer-links')
            ->first('a')
            ->hasLink('/archives')
            ->contains('View archive');

        DB::table('articles')->delete();

        $this->get('/articles')
            ->assertOk()
            ->assertView('articles.index')
            ->in('#no-articles')
            ->first('p')
            ->hasClass('text-center')
            ->contains('There are no articles yet.');
    }
}
