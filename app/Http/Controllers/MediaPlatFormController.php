<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use SocialAuth;

use Illuminate\Http\Request;

class MediaPlatFormController extends Controller
{
    public function auth($provider) {

        return SocialAuth::authorize($provider);

    }

    public function auth_callback($provider) {

        SocialAuth::login($provider, function($user, $info) {

        //    dd($info);
            $user->avatar = $info->avatar;
            $user->email = $info->email;
            $user->email_verified_at = Carbon::now();
            $user->name = $info->nickname;
        });
    }
}
