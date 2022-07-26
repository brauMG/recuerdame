<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() {
        if(Auth::user()->current_profile === null) {
            return redirect('/inicio-admin')->with('mensaje-error', 'Primero debes seleccionar un perfil');
        }
        else {
            $profile_id = Auth::user()->current_profile;

            $profile = Profiles::find($profile_id);

            return view('pages.admin.information.index', compact('profile'));
        }
    }

    public function update(Request $request, $id) {
        $profile_id = $id;

        $validated = $request->validate([
            'type' => ['required'],
            'url_qr' => 'unique:profiles,url_qr,'.$profile_id,
            'allow_mentions' => ['required'],
            'name' => ['required'],
            'last_name' => ['required'],
            'birth_date' => ['required'],
            'passing_date' => ['required'],
            'profile_image' => ['max:5000'],
            'cover_image' => ['max:5000']
        ]);

        $profile = Profiles::find($profile_id);

        $image_profile = $request->profile_image;
        $image_cover = $request->cover_image;
        $current_profile_image = $profile->profile_image;
        $current_cover_image = $profile->cover_image;

        if ($image_profile != null) {
            $new_image_name = rand() . '.' . $image_profile->getClientOriginalExtension();
            $image_profile->move(public_path('profile-pictures'), $new_image_name);
            $profile->profile_image = $new_image_name;
            if ($current_profile_image !== null) {
                unlink(public_path('profile-pictures/' . $current_profile_image));
            }
        }
        if ($image_cover != null) {
            $new_image_name = rand() . '.' . $image_cover->getClientOriginalExtension();
            $image_cover->move(public_path('cover-pictures'), $new_image_name);
            $profile->cover_image = $new_image_name;
            if ($current_cover_image !== null) {
                unlink(public_path('cover-pictures/' . $current_cover_image));
            }
        }

        //assign requestes values from form to variables
        $allow_mentions = $request->allow_mentions;
        $name = $request->name;
        $last_name = $request->last_name;
        $gender = $request->gender;
        $birth_country = $request->birth_country;
        $birth_city = $request->birth_city;
        $birth_state = $request->birth_state;
        $passing_location = $request->passing_location;
        $birth_date = $request->birth_date;
        $passing_date = $request->passing_date;
        $in_life = $request->in_life;
        $hobbies = $request->hobbies;
        $quotes = $request->quotes;
        $family_members = $request->family_members;
        $interest_facts = $request->interest_facts;
        $languages = $request->languages;

        //assign variables values to profile data
        $profile->allow_mentions = $allow_mentions;
        $profile->name = $name;
        $profile->last_name = $last_name;
        $profile->gender = $gender;
        $profile->birth_country = $birth_country;
        $profile->birth_city = $birth_city;
        $profile->birth_state = $birth_state;
        $profile->passing_location = $passing_location;
        $profile->birth_date = $birth_date;
        $profile->passing_date = $passing_date;
        $profile->in_life = $in_life;
        $profile->hobbies = $hobbies;
        $profile->quotes = $quotes;
        $profile->family_members = $family_members;
        $profile->interest_facts = $interest_facts;
        $profile->languages = $languages;



        $profile->save();

        return redirect('/informacion')->with('mensaje', 'Perfil actualizado exitosamente');
    }

    public function view() {
        return view('pages.admin.profile.index-1');
    }
}
