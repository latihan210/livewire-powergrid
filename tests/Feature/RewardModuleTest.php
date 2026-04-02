<?php

use App\Models\User;

test('authenticated users can visit the rewards module', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $response = $this->get(route('rewards.index'));

    $response->assertOk();
    $response->assertSee('Rewards & Points');
});
