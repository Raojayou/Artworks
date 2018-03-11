<?php

namespace Tests\Feature;

use App\Museo;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class MuseosTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test que comprueba que la vista de un museo en específico funciona correctamente.
     */
    public function testMuseoView()
    {
        $user = factory(User::class)->create();
        $museo = factory(Museo::class)->create([
            'user_id' => $user->id
        ]);
        $response = $this->get('/museo/' . $museo->id);
        $response->assertStatus(200);
    }

    /**
     * Test que prueba la creación de un museo fallido.
     */
    public function testCreateFailedMuseo()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);
        $response = $this->post('/museos/create', [
            'name' => ''
        ]);
        $response->assertSessionHas('errors');
    }
}