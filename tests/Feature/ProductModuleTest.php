<?php

use App\Models\User;

test('authenticated users can visit the products module', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $response = $this->get(route('products.index'));

    $response->assertOk();
    $response->assertSee('Products & Packages');
});
