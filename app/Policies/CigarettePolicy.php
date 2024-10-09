<?php

namespace App\Policies;

use App\Models\Cigarette;
use App\Models\Admin;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class CigarettePolicy
{
    public function modify(Admin $admin)
    {
        //
    }
}
