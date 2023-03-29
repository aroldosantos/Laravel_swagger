<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function index(): JsonResponse
    {
        $users = User::all();

        return response()->json($users);
    }



    public function show(string $id): JsonResponse
    {
        $user = User::findOrFail($id);

        return response()->json($user);
    }

}
