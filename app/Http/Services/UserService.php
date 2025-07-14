<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{

  public function create(array $data): User
  {
    return User::create([
      ...$data,
      'password' => Hash::make($data['password']),
    ]);
  }

  public function login(array $data): ?User
  {
    return User::where('email', $data['email'])->first();
  }

  public function findById(int $id): ?User
  {
    return User::find($id);
  }

  public function getUsers(): array
  {
    return User::all()->toArray();
  }

  public function delete(User $user): bool
  {
    return $user->delete();
  }

  public function update(User $user, array $data): User
  {
    return $user->update($data);
  }
}
