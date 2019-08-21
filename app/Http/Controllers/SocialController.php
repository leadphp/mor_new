<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;

class SocialController extends Controller
{
    public function redirectToProvider()
    {
    	return Socialite::driver('facebook')->redirect();
    }
    public function handleProviderCallback()
    {
    	$user = Socialite::driver('facebook')->user();

    	$authUser = $this->findOrCreateUser($user,'facebook');
        \Auth::login($authUser, true);
        return redirect('/');
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name'     => $user->name,
            'email'    => $user->id."@facebook.com",
            'provider' => $provider,
            'provider_id' => $user->id
        ]);
    }

    
}