<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TagControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_store_tag()
    {
         $this
        ->post('tags',['name'=>'PHP'])
        ->assertRedirect('/');
        $this->assertDatabaseHas('tags',['name'=>'PHP']);

    }
}
