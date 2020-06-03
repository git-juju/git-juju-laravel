<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class   UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->middleware('auth', [
            'except' => ['show', 'create', 'store']
        ]);
    }
    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }
}
