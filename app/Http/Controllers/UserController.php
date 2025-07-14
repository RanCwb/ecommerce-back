<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Services\UserService;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(private UserService $userService) {}

    public function store(StoreUserRequest $request)
    {

        try {

            $validated = $request->validated();

            $user = $this->userService->create($validated);

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json(['user' => $user, 'token' => $token], 201);
        } catch (\Exception $e) {

            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function findById(int $id)
    {
        $user = $this->userService->findById($id);

        return response()->json(['user' => $user], 200);
    }

    public function index()
    {
        $users = $this->userService->getUsers();

        return response()->json(['users' => $users], 200);
    }

    public function delete(User $user)
    {
        $this->userService->delete($user);
    }
}
