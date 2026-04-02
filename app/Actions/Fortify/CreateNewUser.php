<?php

namespace App\Actions\Fortify;

use App\Concerns\PasswordValidationRules;
use App\Concerns\ProfileValidationRules;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules, ProfileValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            ...$this->profileRules(),
            'password' => $this->passwordRules(),
        ])->validate();

        $baseUsername = Str::slug(Str::before($input['email'], '@'), separator: '_');
        $username = $baseUsername !== '' ? $baseUsername : 'user';
        $suffix = 1;

        while (User::where('username', $username)->exists()) {
            $username = $baseUsername !== ''
                ? $baseUsername.'_'.$suffix
                : 'user_'.$suffix;
            $suffix++;
        }

        return User::create([
            'name' => $input['name'],
            'username' => $username,
            'email' => $input['email'],
            'password' => $input['password'],
            'must_reset_password' => false,
        ]);
    }
}
