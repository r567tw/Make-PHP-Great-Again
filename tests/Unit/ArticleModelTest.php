<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;

class ArticleModelTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testHaveManyTags()
    {
        $article = \App\Article::first();
        $this->assertInstanceOf(Collection::class, $article->tags);
    }
}
