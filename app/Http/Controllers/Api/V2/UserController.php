<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Models\User;

/**
 * Class UserController
 *
 * @package App\Http\Controllers\Api\V2
 */
class UserController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return User::paginate(10);
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
