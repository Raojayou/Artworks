<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UsersTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test que comprueba que podemos logearnos con un usuario.
     */
    public function testUserCanLogin()
    {
        $user = factory(User::class)->create();
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'secret'
        ]);
        $this->assertAuthenticatedAs($user);
    }

    /**
     *  Test que comprueba que la vista del usuario funciona correctamente.
     */
    public function testShowUserPage()
    {
        $user = factory(User::class)->create();

        $response = $this->get('/user/' . $user->username);
        $response->assertStatus(200);
    }

    /**
     * Test que comprueba que la vista de otro usuario funciona correctamente.
     */
    public function testShowAnotherUser()
    {
        $user = factory(User::class)->create();
        $newuser = factory(User::class)->create();

        $this->actingAs($user);
        $response = $this->get('/user/' . $newuser->username);
        $response->assertStatus(200);
    }

    /**
     * Test que comprueba que la vista del perfil del usuario logeado funciona correctamente.
     */
    public function testShowUserProfile()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/profile');
        $response->assertStatus(200);
    }
//    /**
//     * Test que comprueba que la vista de edición, del perfil del usuario logeado, funciona correctamente.
//     */
//    public function testShowUserProfileEdit()
//    {
//        $user = factory(User::class)->create();
//        $response = $this->actingAs($user)->get('/profile/edit');
//        $response->assertStatus(200);
//    }
    /**
     * Test que comprueba que la vista de edición cuenta, del perfil del usuario logeado, funciona correctamente.
     */
    public function testShowUserAcountEdit()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/profile/account');
        $response->assertStatus(200);
    }

    /**
     * Test que comprueba que la vista de edición password, del perfil del usuario logeado, funciona correctamente.
     */
    public function testShowUserPasswordEdit()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/profile/password');
        $response->assertStatus(200);
    }

    /**
     * Test que comprueba que la vista de edición avatar, del perfil del usuario logeado, funciona correctamente.
     */
    public function testShowUserAvatar()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/profile/avatar');
        $response->assertStatus(200);
    }

    /**
     * Test que comprueba que podemos editar el name del perfil de edición.
     */
    public function testUpdateProfileName()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);
        $this->patch('/profile/account', [
            'name' => 'Josan',
        ]);
        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => 'Josan',
        ]);
    }

    /**
     * Test que comprueba que podemos eliminar al usuario logeado.
     */
    public function testUserDelete()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);
        $response = $this->post('/profile/delete');
        $response->assertStatus(405);
    }
}