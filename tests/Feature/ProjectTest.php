<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase{
    use WithFaker,RefreshDatabase;

    /** @test **/
    public function a_user_can_create_project(){
        $this->withoutExceptionHandling();
        $attri = [
          'title' => $this->faker->sentence,
          'description' => $this->faker->paragraph,
        ];
        $this->post('/projects', $attri);
        $this->assertDatabaseHas('projects',$attri);
    }

}
