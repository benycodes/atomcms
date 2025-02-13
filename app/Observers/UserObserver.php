<?php

namespace App\Observers;

use App\Models\User;
use App\Models\UserCurrency;

class UserObserver
{
    public function created(User $user)
    {
        UserCurrency::query()->insert([
            [
                'user_id' => $user->id,
                'type' => 0,
                'amount' => setting('start_duckets'),
            ],
            [
                'user_id' => $user->id,
                'type' => 5,
                'amount' => setting('start_diamonds'),
            ],
            [
                'user_id' => $user->id,
                'type' => 101,
                'amount' => setting('start_points'),
            ],
        ]);
    }
}