<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;

/**
 * Class UserController Controller
 */
class UserController extends Controller
{

/**
 * @OA\Get(
 *    path="/api/users",
 *    tags={"Users"},
 *      summary="List of users registered in the system",
 *      security={{"bearerAuth":{}}},
 *      @OA\Response(
 *          response=200,
 *          description="Listing completed successfully."
 *      ),
 *
 *      @OA\Response(
 *          response="default",
 *          description="An error has occurred."
 *      )
 * )
 * 
 *
 * Index Method
 *
 * Returns all users
 * @return Illuminate\Http\JsonResponse
 */
    public function index(): JsonResponse
    {
        $users = User::all();

        return response()->json($users);
    }

/**
 * @OA\Get(
 *    path="/api/users/{id}",
 *    tags={"Users"},
 *      summary="Search user by ID",
 *      security={{"bearerAuth":{}}},
 * @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="User ID",
 *         required=true,
 *         @OA\Schema(
 *             type="integer"
 *         )
 *     ),
 *
 *      @OA\Response(
 *          response=200,
 *          description="User found successfully"
 *      ),
 *
 *       @OA\Response(
 *         response=404,
 *         description="User not found"
 *     ),
 * )
 * 
 * Show method
 * 
 * Search user by ID
 * 
 * @param int $id
 * @return Illuminate\Http\JsonResponse
 */
    public function show(int $id): JsonResponse
    {

        $user = User::find($id);

        if ($user) {
            return response()->json($user);
        }

        return response()->json(['message' => 'User not found'], 404);

    }

}
