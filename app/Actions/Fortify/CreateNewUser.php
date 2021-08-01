<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        // dd($input);
        Validator::make($input, [
            "name" => ["required", "string", "max:255"],
            "position" => ["required", "string", "max:255"],
            "ic_number" => ["required", "string", "max:255"],
            "phone_number" => ["required", "string", "max:255"],
            "department" => ["required", "string", "max:255"],
            "user_role" => ["required", "string", "max:255"],
            "email" => [
                "required",
                "string",
                "email",
                "max:255",
                Rule::unique(User::class),
            ],
            "password" => $this->passwordRules(),
            // "passwordConfirmation" => $this->passwordRules(),
        ])->validate();

        return User::create([
            "name" => $input["name"],
            "email" => $input["email"],
            "position" => $input["position"],
            "ic_number" => $input["ic_number"],
            "phone_number" => $input["phone_number"],
            "department" => $input["department"],
            "user_role" => $input["user_role"],
            "password" => Hash::make($input["password"]),
            // "password-confirmation" => $input["password-confirmation"],
        ]);
    }
}
