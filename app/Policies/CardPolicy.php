<?php

namespace App\Policies;

use App\Models\Card;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CardPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, Card $card)
    {
        //
    }

    public function create(User $user)
    {
        //
    }


    public function update(User $user, Card $card)
    {
        return $user->id === $card->owner_id;
    }

    public function delete(User $user, Card $card)
    {
        return $user->id === $card->owner_id;
    }

    public function restore(User $user, Card $card)
    {
        //
    }

    public function forceDelete(User $user, Card $card)
    {
        //
    }
}