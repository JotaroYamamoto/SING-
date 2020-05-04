<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\User;
class ExampleTest extends TestCase
{
    public function testBasicTest()
    {
        $response=$this->get('/');
        $response->assertStatus(200);
    }

}
