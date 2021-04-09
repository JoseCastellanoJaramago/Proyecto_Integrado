<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class UserModuleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_shows_the_users_list()
    {
        User::factory()->create([
            'name' => 'Eva'
        ]);

        User::factory()->create([
            'name' => 'Pepe'
        ]);

        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('Eva')
            ->assertSee('Pepe');
    }

    /** @test */
    public function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        //DB::table('users')->truncate();

        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('No hay usuarios registrados');
    }

    /** @test */
    function it_displays_the_users_details()
    {
        $user = User::factory()->create([
            'name' => 'Sara Repeto'
        ]);

        $this->get('/usuarios/'.$user->id) // usuarios/5
            ->assertStatus(200)
            ->assertSee('Sara Repeto');
    }

    /** @test*/
    function it_displays_a_404_error_if_the_users_is_not_found()
    {
        $this->get('/usuarios/999')
            ->assertStatus(404)
            ->assertSee('Página no encontrada');
    }

    /** @test */
    public function it_loads_the_new_users_page()
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200) //Que la página cargue correctamente
            ->assertSee('Crear nuevo usuario'); //El mensaje que se espera obtener
    }

    /** @test */
    public function it_creates_a_new_user()
    {
        $this->withoutExceptionHandling();

        $this->post('/usuarios/', [
            'name' => 'Eva',
            'email' => 'emarchenamejias@safareyes.es',
            'password' => '123456'
        ])->assertRedirect('usuarios');

        $this->assertCredentials([
            'name' => 'Eva',
            'email' => 'emarchenamejias@safareyes.es',
            'password' => '123456'
        ]);
    }

    /** @test */
    public function the_name_is_required()
    {
        $this->from('usuarios/nuevo') //nos posicionamos en la url
            ->post('/usuarios/', [ // enviamos una petición de tipo post a la url usuarios
            'name' => '',
            'email' => 'emarchenamejias@safareyes.es',
            'password' => '123456'
            ])
            ->assertRedirect('usuarios/nuevo') // al dejar name vacío esperamos ser redirigidos a la url usuarios/nuevo
            ->assertSessionHasErrors(['name' => 'El campo nombre es obligatorio']); //Espera que exista un campo nombre en el listado de errores en la excepción

        $this->assertEquals(0, User::count()); // 0 es valor esperado, valor actual count

//        $this->assertDatabaseMissing('users', [ //Espero no encontrar en la BD un usuario con estos datos
//            'email' => 'emarchenamejias@safareyes.es'
//        ]);
    }

    /** @test */
    public function the_email_is_required()
    {
        $this->from('usuarios/nuevo')
        ->post('/usuarios/', [
            'name' => 'Eva',
            'email' => '',
            'password' => '123456'
        ])
            ->assertRedirect('usuarios/nuevo')
            ->assertSessionHasErrors(['email']);

        $this->assertEquals(0, User::count());
    }

    /** @test */
    public function the_email_must_be_valid()
    {
        $this->from('usuarios/nuevo')
            ->post('/usuarios/', [
                'name' => 'Eva',
                'email' => 'correo-no-valido',
                'password' => '123456'
            ])
            ->assertRedirect('usuarios/nuevo')
            ->assertSessionHasErrors(['email']);

        $this->assertEquals(0, User::count());
    }

    /** @test */
    public function the_email_must_be_unique()
    {
        User::factory()->create([
            'email' => 'emarchenamejias@safareyes.es'
        ]);

        $this->from('usuarios/nuevo')
            ->post('/usuarios/', [
                'name' => 'Eva',
                'email' => 'emarchenamejias@safareyes.es',
                'password' => '123456'
            ])
            ->assertRedirect('usuarios/nuevo')
            ->assertSessionHasErrors(['email']);

        $this->assertEquals(1, User::count());
    }

    /** @test */
    public function the_password_is_required()
    {
        $this->from('usuarios/nuevo')
        ->post('/usuarios/', [
            'name' => 'Eva',
            'email' => 'emarchenamejias@safareyes.es',
            'password' => ''
        ])
            ->assertRedirect('usuarios/nuevo')
            ->assertSessionHasErrors(['password']);

        $this->assertEquals(0, User::count());
    }

    /** @test */
    public function it_loads_the_edit_users_page()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();

        $this->get("/usuarios/{$user->id}/editar")
            ->assertStatus(200)
            ->assertViewIs('users.edit')
            ->assertSee('Editar usuario')
            ->assertViewHas('user', function($viewUser) use ($user){
                return $viewUser->id === $user->id;
            });
    }

    /** @test */
    public function it_updates_a_user()
    {
        $user = User::factory()->create();

        $this->withoutExceptionHandling();

        $this->put("/usuarios/{$user->id}", [
            'name' => 'Eva',
            'email' => 'emarchenamejias@safareyes.es',
            'password' => '123456'
        ])->assertRedirect("usuarios/{$user->id}");

        $this->assertCredentials([
            'name' => 'Eva',
            'email' => 'emarchenamejias@safareyes.es',
            'password' => '123456'
        ]);
    }

    /** @test */
    public function the_name_is_required_when_updating_a_user()
    {
        $user = User::factory()->create();

        $this->from("/usuarios/{$user->id}/editar")
            ->put("/usuarios/{$user->id}", [
            'name' => '',
            'email' => 'emarchenamejias@safareyes.es',
            'password' => '123456'
        ])
            ->assertRedirect("/usuarios/{$user->id}/editar")
            ->assertSessionHasErrors(['name']);

        $this->assertDatabaseMissing('users', ['email' => 'emarchenamejias@safareyes.es']);
    }

    /** @test */
    public function the_email_must_be_valid_when_updating_the_user()
    {
        $user = User::factory()->create();

        $this->from("/usuarios/{$user->id}/editar")
            ->put("/usuarios/{$user->id}", [
                'name' => 'Eva',
                'email' => 'correo-no-valido',
                'password' => '123456'
            ])
            ->assertRedirect("/usuarios/{$user->id}/editar")
            ->assertSessionHasErrors(['email']);

        $this->assertDatabaseMissing('users', ['name' => 'Eva']);
    }

    /** @test */
    public function the_email_must_be_unique_when_updating_the_user()
    {
        //$this->withoutExceptionHandling();

        User::factory()->create([
            'email' => 'existing-email@example.com'
        ]);

        $user = User::factory()->create([
            'email' => 'emarchenamejias@safareyes.es'
        ]);

        $this->from("usuarios/$user->id/editar")
            ->put("/usuarios/{$user->id}", [
                'name' => 'Eva',
                'email' => 'existing-email@example.com',
                'password' => '123456'
            ])
            ->assertRedirect("usuarios/$user->id/editar")
            ->assertSessionHasErrors(['email']);

    }

    /** @test */
    public function the_users_mail_can_stay_the_same_when_updating_the_user()
    {
        $user = User::factory()->create([
            'email' => 'emarchenamejias@safareyes.es'
        ]);

        $this->from("usuarios/$user->id/editar")
            ->put("/usuarios/{$user->id}", [
                'name' => 'Eva Marchena',
                'email' => 'emarchenamejias@safareyes.es',
                'password' => '12345678'
            ])
            ->assertRedirect("usuarios/{$user->id}"); //users.show

        $this->assertDatabaseHas('users', [
            'name' => 'Eva Marchena',
            'email' => 'emarchenamejias@safareyes.es'
        ]);
    }

    /** @test */
    public function the_password_is_optional_when_updating_the_user()
    {
        $oldPassword = 'CLAVE_ANTERIOR';

        $user = User::factory()->create([
            'password' => bcrypt($oldPassword)
        ]);

        $this->from("usuarios/$user->id/editar")
            ->put("/usuarios/{$user->id}", [
                'name' => 'Eva',
                'email' => 'emarchenamejias@safareyes.es',
                'password' => ''
            ])
            ->assertRedirect("usuarios/{$user->id}"); //users.show

        $this->assertCredentials([
            'name' => 'Eva',
            'email' => 'emarchenamejias@safareyes.es',
            'password' => $oldPassword
        ]);
    }

    /** @test */
    public function it_deletes_a_user(){

        $this->withoutExceptionHandling();

        $user = User::factory()->create();

        $this->delete("usuarios/{$user->id}")
            ->assertRedirect('usuarios');

        $this->assertDatabaseMissing('users', [
            'id' => $user->id
        ]);

        //$this->assertSame(0, User::count());
    }
}
