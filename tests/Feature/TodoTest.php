<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('authenticated user can create a todo', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post('/todo', [
        'name' => 'Belajar CI/CD',
        'description' => 'Membuat demonstrasi pipeline GitHub Actions',
        'is_done' => false,
    ]);

    $response->assertRedirect('/todo');
    $this->assertDatabaseHas('todos', [
        'name' => 'Belajar CI/CD',
        'description' => 'Membuat demonstrasi pipeline GitHub Actions',
        'is_done' => true,
        'user_id' => $user->id,
    ]);
});
