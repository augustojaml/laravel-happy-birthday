<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{

  protected $model = User::class;

  public function definition()
  {
    return [
      'name' => 'admin',
      'email' => 'matraca.suporte@gmail.com',
      'email_verified_at' => now(),
      'password' => Hash::make('root'),
      'remember_token' => Str::random(10),
    ];
  }


  public function unverified()
  {
    return $this->state(function (array $attributes) {
      return [
        'email_verified_at' => null,
      ];
    });
  }
}
