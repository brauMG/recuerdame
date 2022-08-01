<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use App\Models\User;
use App\Models\UserProfiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $user = Auth::user();

        $profiles = UserProfiles::where('id_user', $user->id)
            ->join('profiles', 'profiles.id', 'user_profiles.id_profile')
            ->select('profiles.*')
            ->get();

        return view('pages.admin.select.index', compact('profiles', 'user'));
    }

    public function create() {
        return view('pages.admin.select.new');
    }

    public function manage($id) {
        $user = User::find(Auth::user()->id);
        $user->current_profile = $id;
        $user->save();

        return redirect('/inicio-admin')->with('mensaje', 'Se actualizo el perfil actual');
    }

    public function delete_view($id) {
        return view('pages.admin.select.delete', compact('id'));
    }

    public function delete($id) {
        $user = User::find(Auth::user()->id);
        $id = intval($id);
        if ($user->current_profile === $id) {
            $user->current_profile = null;
            $user->save();
        }

        $profile = Profiles::find($id);
        $profile->delete();

        UserProfiles::where('id_profile', $id)->delete();

        //i wont delete posts/media or mentions

        return redirect('/inicio-admin')->with('mensaje-warning', 'Se elimino el perfil');
    }

    public function store(Request $request) {
        $user_id = Auth::user()->id;

        $profile_data = $request->validate([
            'type' => ['required'],
            'url_qr' => 'unique:profiles,url_qr',
            'allow_mentions' => ['required'],
            'profile_image' => ['required', 'max:5000'],
            'name' => ['required'],
            'last_name' => ['required'],
            'birth_date' => ['required'],
            'passing_date' => ['required']
        ]);

        $image = $profile_data['profile_image'];
        $new_image_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('profile-pictures'), $new_image_name);
        $profile_data['profile_image'] = $new_image_name;


        $stored_data = Profiles::create([
            'type' => $profile_data['type'],
            'url_qr' => $profile_data['url_qr'],
            'allow_mentions' => $profile_data['allow_mentions'],
            'profile_image' => $profile_data['profile_image'],
            'name' => $profile_data['name'],
            'last_name' => $profile_data['last_name'],
            'birth_date' => $profile_data['birth_date'],
            'passing_date' => $profile_data['passing_date']
        ]);

        UserProfiles::create([
            'id_user' => $user_id,
            'id_profile' => $stored_data->id
        ]);

        $user_db_date = User::find($user_id);
        $user_db_date->current_profile = $stored_data->id;
        $user_db_date->save();

        return redirect('/inicio-admin')->with('mensaje', 'Perfil agregado exitosamente.');
    }
}
