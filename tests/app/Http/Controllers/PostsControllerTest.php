<?php
namespace Tests\App\Http\Controllers;


use TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PostsControllerTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function blog_status_code_should_be_200()
    {
        $this->visit('/blog')->seeStatusCode(200);
    }

    /** @test */
    public function blog_should_return_a_collection_of_records()
    {
        $posts = factory('App\Post', 4)->create();

        $this->get('/blog')
            ->seeStatusCode(200);

        foreach ($posts as $post)
        {
            $this->see($post->title);
        }
    }

    /** @test */
    public function show_should_return_a_valid_post()
    {
        $post = factory('App\Post')->create();

        $this
            ->get("/blog/{$post->slug}")
            ->seeStatusCode(200);

        $this->see($post->title);
    }

    /** @test */
    public function show_should_fail_when_the_post_slug_does_exist()
    {
        $this
            ->get('/blog/laravel-6', ['Accept' => 'application/json'])
            ->seeStatusCode(404)
            ->seeJson([
                'message' => 'Post Not Found.',
                'status'  => 404
            ]);
    }

    /** @test */
    public function store_should_save_new_post_in_the_database()
    {
        $this->post('/blog', [
            'title' => 'laravel exceptions',
            'description' => 'first paragraph',
            'content' => 'Laravel is a framework'
        ]);

        $this->seeInDatabase('posts', ['title' => 'laravel exceptions']);
    }

    /** @test */
    public function update_should_only_change_fillable_fields()
    {
        $post = factory('App\Post')->create([
            'title' => 'laravel 5',
            'description' => 'Laravel is a framework of php',
            'content' => 'lorem ipsum',
        ]);

        $post = $this->put("/blog/{$post->slug}", [
            'title' => 'laravel 5',
            'description' => 'laravel 5.2 new features',
            'content' => 'lorem ipsum',
        ]);

        $this
            ->seeStatusCode(302)
            ->seeInDatabase('posts', [
                'title' => 'laravel 5'
            ]);
    }

    /** @test */
    public function destroy_should_remove_a_valid_post()
    {
        $post = factory('App\Post')->create();

        $this
            ->delete("/blog/{$post->id}")
            ->isEmpty();

        $this->notSeeInDatabase('posts', ['id' => $post->id]);
    }
}





















