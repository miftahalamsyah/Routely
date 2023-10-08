<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use Exception;
use Socialite;
use App\Models\User;
class GitHubController extends Controller
{
    public function gitRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function gitCallback()
    {
        try {
            $user = Socialite::driver('github')->user();
            $searchUser = User::where('github_id', $user->id)->first();
            $slug = (string) Str::uuid();

            if ($searchUser) {
                Auth::login($searchUser);
                return redirect('/student');
            } else {
                $slug = (string) Str::uuid();
                $gitUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'slug' => $slug,
                    'github_id' => $user->id,
                    'auth_type' => 'github',
                    'password' => encrypt('gitpwd059')
                ]);

                Auth::login($gitUser);
                return redirect('/student');
            }
        } catch (Exception $e) {
            return redirect('/student');
        }
    }
}
