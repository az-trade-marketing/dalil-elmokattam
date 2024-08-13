<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\AdminResetPassword;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\AdminLoginRequest;
use Illuminate\Support\Carbon;
use Mail;
class AdminAuthenticatedSessionController extends Controller
{

    public function login()
    {
        return view('admin.auth.loginForm');
    }
    public function create()
    {
        return view('admin.auth.loginForm');
    }

    public function store(AdminLoginRequest $request)
    {

        $request->authenticate('admin');
        $request->session()->regenerate();
        $user = Auth::guard("admin")->user();
        if ($user->hasRole('stores')) {
            return redirect()->to("admin/stores/".$user?->store_id."/edit");
        }
        return redirect()->intended(RouteServiceProvider::ADMIN);
    }

    


    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('AdminFormLogin');
    }

    public function forgotPassword(){
        return view('admin.auth.forgot-password');
    }

    public function forgotPasswordPost(){
        $admin = Admin::where('email', request('email'))->first();
        if(!empty($admin)) {
            $token = app('auth.password.broker')->createToken($admin);
            $data = DB::table('password_resets')->insert([
                'email'         =>      $admin->email,
                'token'         =>      $token,
                'created_at'    =>    Carbon::now()
            ]);
            Mail::to($admin->email)->send(new AdminResetPassword(['data'=>$admin, 'token'=>$token]));
            return back()->with(['success' => 'Success Processes Check Your Inbox Mail']);
        }
        return back();
    }

    public function resetPasswordStore($token) {
        $this->validate(request(), [
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required',
        ], [], [
            'password'              => 'Password',
            'password_confirmation' => 'Confirmation Password',
        ]);
        $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();
		if (!empty($check_token)) {
            $admin = Admin::where('email', $check_token->email)->update([
                'email'    => $check_token->email,
                'password' => bcrypt(request('password'))
            ]);
            DB::table('password_resets')->where('email', request('email'))->delete();
            return redirect()->route('AdminFormLogin')->with(['success' => 'Success Password Change']);
        } else {
			return redirect()->route('admin.forgotPassword');
		}
    }

    public function resetPassword($token){
        $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();
		if (!empty($check_token)) {
			return view('admin.auth.reset-password', ['data' => $check_token]);
		} else {
			return redirect(route('admin.forgotPassword'));
		}
    }
}
