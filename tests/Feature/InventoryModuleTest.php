<?php

use App\Models\User;

test('authenticated users can visit the inventory module', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $response = $this->get(route('inventory.index'));

    $response->assertOk();
    $response->assertSee('Inventory & Purchase Orders');
});
