<?php

namespace Tests\Feature;

use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_empty()
    { 
        // $this->withExceptionHandling();
        $this->get('/')
        ->assertStatus(200)
        ->assertSee('No hay etiquetas');
    }
    public function test_With_Data()
    {
        $tag=Tag::factory()->create();
        // dd($tag->name);
        $this->get('/')
        ->assertStatus(200)
        ->assertSee($tag->name)
        ->assertDontSee('No hay etiquetas');
        ;
    }
}
