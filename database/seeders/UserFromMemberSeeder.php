<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserFromMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = DB::table('members')->get();

        foreach ($members as $member) {
            $user = $member->user_id
                ? User::query()->find($member->user_id)
                : null;

            $payload = [
                'name' => $member->name ?: 'No Name',
                'username' => $member->username,
                'email' => $member->email,
                'password' => $member->password,
                'must_reset_password' => true,
                'updated_at' => now(),
            ];

            if ($user) {
                $user->update($payload);
                $userId = $user->id;
            } else {
                $userId = DB::table('users')->insertGetId([
                    ...$payload,
                    'created_at' => now(),
                ]);
            }

            DB::table('members')
                ->where('id', $member->id)
                ->update(['user_id' => $userId]);
        }
    }
}
