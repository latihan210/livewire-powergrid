<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

test('administrator can impersonate a member and return without logout', function () {
    $admin = User::factory()->create();
    $memberUser = User::factory()->create([
        'must_reset_password' => true,
    ]);

    $memberId = DB::table('members')->insertGetId([
        'user_id' => $memberUser->id,
        'username' => 'member-'.Str::lower(Str::random(8)),
        'name' => 'Member Impersonation',
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
        'email' => $memberUser->email,
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

    $startResponse = $this->actingAs($admin)
        ->withHeader('referer', route('member'))
        ->get(route('impersonation.start', ['member' => $memberId]));

    $startResponse->assertRedirect(route('dashboard'));
    $this->assertAuthenticatedAs($memberUser);
    expect(session('impersonator_id'))->toBe($admin->id);

    $dashboardResponse = $this->get(route('dashboard'));
    $dashboardResponse->assertOk();
    $dashboardResponse->assertSee('Kembali ke Admin');

    $stopResponse = $this->get(route('impersonation.stop'));

    $stopResponse->assertRedirect(route('member'));
    $this->assertAuthenticatedAs($admin);
    expect(session()->has('impersonator_id'))->toBeFalse();
});
