<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class UserController
 *
 * @package App\Http\Controllers\Api\V1
 */
class UserController extends Controller
{
    /**
     * @return User[]|Collection
     */
    public function index()
    {
        return User::all();
    }

    /**
     * @param User $user
     *
     * @return User
     */
    public function show(User $user): User
    {
        return $user;
    }
}
