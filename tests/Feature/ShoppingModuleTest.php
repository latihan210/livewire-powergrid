<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

function createShoppingMember(): User
{
    $user = User::factory()->create();

    DB::table('members')->insert([
        'user_id' => $user->id,
        'username' => 'member-' . Str::lower(Str::random(8)),
        'name' => 'Shopping Member',
        'package' => 'basic',
        'sponsor' => 1,
        'sponsor_uid' => 'ADMIN',
        'parent' => random_int(1000, 9999),
        'parent_uid' => 'ROOT',
        'position' => 'L',
        'group' => 1,
        'gen' => 1,
        'level' => 1,
        'tree_sponsor' => '1',
        'tree' => '1',
        'email' => $user->email,
        'phone' => '081234567890',
        'password' => bcrypt('password'),
        'password_pin' => '123456',
        'password_trx' => '123456',
        'type' => 2,
        'status' => 1,
        'province' => 1,
        'district' => 1,
        'bank' => 1,
        'total_omzet' => 0,
        'package_omzet' => 0,
        'as_stockist' => 0,
        'as_stockist_pusat' => 0,
        'to_stockist' => 0,
        'shop_invoice' => 0,
        'shop_uniquecode' => 0,
        'change_password' => 0,
        'member_hu' => 0,
        'is_ro' => 0,
        'datecreated' => now(),
        'datemodified' => now(),
    ]);

    return $user->fresh();
}

test('member users can visit shopping pages', function () {
    $user = createShoppingMember();

    $this->actingAs($user)
        ->get(route('shopping.shop'))
        ->assertOk()
        ->assertSee('Katalog belanja member');

    $this->actingAs($user)
        ->get(route('shopping.cart'))
        ->assertOk()
        ->assertSee('Keranjang member');

    $this->actingAs($user)
        ->get(route('shopping.history'))
        ->assertOk()
        ->assertSee('Riwayat belanja');
});
