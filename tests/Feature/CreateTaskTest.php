<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

class CreateTaskTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * Тест проверки добавления заказа
     */
    public function testExample()
    {
         $user = factory(User::class)->create();

         $response = $this->actingAs($user)
             ->withSession([])
             ->post('/createTask',[
                 'name' =>  $this->faker()->title,
                 'about' =>  $this->faker()->paragraph,
                 'idTowns' => Str::random(5),
                 'idUser' => $user->id,
                 'idCategory' => 1,
                 'price' => Str::random(9999)
         ]);

         $response->assertStatus(302);
     }
}