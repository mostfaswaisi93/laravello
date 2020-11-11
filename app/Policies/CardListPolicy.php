<?php

namespace App\Policies;

use App\Models\CardList;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CardListPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, CardList $cardList)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, CardList $cardList)
    {
        //
    }

    public function delete(User $user, CardList $cardList)
    {
        //
    }

    public function restore(User $user, CardList $cardList)
    {
        //
    }

    public function forceDelete(User $user, CardList $cardList)
    {
        //
    }

    public function createCard(User $user, CardList $cardList)
    {
        return $user->id === $cardList->board->owner_id;
    }
}
