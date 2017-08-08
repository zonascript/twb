<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\SocialAccount;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        $fbUser = Socialite::driver('facebook')->user();
        $user = $this->createOrGetUser($fbUser);

        auth()->login($user);
        return redirect()->to('/dunia-main');
    }

    public function createOrGetUser($providerUser)
    {
        $account = SocialAccount::whereProvider('facebook')
            ->whereProviderUserId($providerUser->getId())
            ->first();
        if ($account) {
            return $account->user;
        } else {

            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'facebook'
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {

                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'password' => bcrypt($providerUser->id)
                ]);

                $user->detail()->create([
                    'avatar' => $providerUser->avatar
                ]);

                $user->assignRole('Coin');
            }

            $account->user()->associate($user);
            $account->save();

            return $user;

        }

    }
}
