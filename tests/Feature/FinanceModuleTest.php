<?php

use App\Models\User;

test('authenticated users can visit the finance module', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $response = $this->get(route('finance.index'));

    $response->assertOk();
    $response->assertSee('Bonuses, Wallet & Withdraw');
});
