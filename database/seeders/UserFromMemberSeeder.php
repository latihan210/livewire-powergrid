<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

            $resolvedUsername = $this->resolveUsername($member, $user?->id);
            $resolvedEmail = $this->resolveEmail($member, $user?->id);

            $payload = [
                'name' => $member->name ?: 'No Name',
                'username' => $resolvedUsername,
                'email' => $resolvedEmail,
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

    private function resolveUsername(object $member, ?int $ignoreUserId = null): string
    {
        $baseUsername = Str::slug($member->username ?: 'user_'.$member->id, '_');
        $username = $baseUsername !== '' ? $baseUsername : 'user_'.$member->id;
        $suffix = 1;

        while ($this->usernameExists($username, $ignoreUserId)) {
            $username = $baseUsername.'_'.$suffix;
            $suffix++;
        }

        return $username;
    }

    private function resolveEmail(object $member, ?int $ignoreUserId = null): string
    {
        $email = Str::lower(trim((string) ($member->email ?? '')));

        if ($this->isUsableEmail($email) && ! $this->emailExists($email, $ignoreUserId)) {
            return $email;
        }

        $baseLocalPart = Str::slug($member->username ?: 'member_'.$member->id, '.');
        $baseLocalPart = $baseLocalPart !== '' ? $baseLocalPart : 'member.'.$member->id;
        $fallbackEmail = $baseLocalPart.'@placeholder.local';
        $suffix = 1;

        while ($this->emailExists($fallbackEmail, $ignoreUserId)) {
            $fallbackEmail = $baseLocalPart.'.'.$suffix.'@placeholder.local';
            $suffix++;
        }

        return $fallbackEmail;
    }

    private function isUsableEmail(string $email): bool
    {
        return $email !== '' && filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    private function usernameExists(string $username, ?int $ignoreUserId = null): bool
    {
        return User::query()
            ->when($ignoreUserId, fn ($query) => $query->where('id', '!=', $ignoreUserId))
            ->where('username', $username)
            ->exists();
    }

    private function emailExists(string $email, ?int $ignoreUserId = null): bool
    {
        return User::query()
            ->when($ignoreUserId, fn ($query) => $query->where('id', '!=', $ignoreUserId))
            ->where('email', $email)
            ->exists();
    }
}
