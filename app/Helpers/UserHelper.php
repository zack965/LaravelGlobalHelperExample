
<?php

/* use Illuminate\Support\Facades\Auth; */

use Illuminate\Support\Facades\Auth;

if (! function_exists("get_user_full_name_of_authenticated_user")) {
    function get_user_full_name_of_authenticated_user()
    {
        $user = Auth::user();

        return "{$user->first_name} - {$user->last_name}";
    }
}
