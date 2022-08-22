<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\LoginRequest;
use App\Http\Requests\Teacher\SendOtpRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getOtp()
    {
        return view('teacher.sendOtp');
    }

    public function sendOtp(SendOtpRequest $request)
    {
        $otp_expires_time = Carbon::now()->addSeconds(60);

        $otp = rand(1000,9999);

        $user = User::where('phone_number', $request->phoneNumber())->first();

        if ($user !== null) {
            $user->otp = $otp;
            $user->otp_expires_time = $otp_expires_time; 
            $user->save();
        } 
        
        else {
            $user = new User();
            $user->phone_number = $request->phoneNumber();
            $user->otp = $otp;
            $user->otp_expires_time = $otp_expires_time;
            $user->save();

            $user->assignRole(config('settings.roles.teacher'));
        }
        
	
        return view('teacher.login', compact('user'));
    }

    public function login(Request $request)
    {
        $user = User::where([
			['phone_number', '=', $request->phone],
			['otp', '=', $request->otp]
		])->first();

        if($user) 
        {
            if($user->otp_expires_time >= Carbon::now())
            {
                Auth::login($user);
                return redirect()->route('teacher.dashboard');
            }
            return response()->json(['Otp is expired'], 422);
        }
		return response()->json(['success' => true,'message' => 'Otp is not verified successfully'], 422);
    }
}
