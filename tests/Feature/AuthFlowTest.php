<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthFlowTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_user_is_redirected_from_laporan_index(): void
    {
        $this->get('/laporan')->assertRedirect('/login');
    }

    public function test_user_can_register(): void
    {
        $response = $this->post('/register', [
            'name' => 'Andi',
            'email' => 'andi@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $response->assertRedirect('/laporan');
        $this->assertDatabaseHas('users', ['email' => 'andi@example.com']);
        $this->assertAuthenticated();
    }

    public function test_authenticated_user_can_view_laporan_index(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get('/laporan')
            ->assertOk();
    }
}
