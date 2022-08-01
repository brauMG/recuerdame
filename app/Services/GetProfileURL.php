<?php


namespace App\Services;

use App\Models\Profiles;
use Illuminate\Support\Facades\Auth;

class GetProfileURL
{
    public function get(){
        $profile_id = Auth::user()->current_profile;
        $profile = Profiles::find($profile_id);
        if (isset($profile->url_qr)) {
            $url_qr = $profile->url_qr;
        }
        else {
            $url_qr = '';
        }

        return $url_qr;
    }
}
