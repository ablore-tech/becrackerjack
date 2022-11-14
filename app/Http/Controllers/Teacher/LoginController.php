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
            $user->userDetail()->create(['user_id' => $user->id]);
            $user->assignRole(config('settings.roles.teacher'));
        }
        
        // Account details
        $apiKey = urlencode('NDM0ZTRiNmYzNDM0NGQ2ZDY4NjE2MjRmNWE0NDQ0MzQ=');
        // Message details
        $numbers = array('91'.$request->phoneNumber());
        $sender = urlencode('BECRAC');
        $message = rawurlencode('OTP to verify your mobile number on Be Crackerjack is '. $otp);
        
        $numbers = implode(',', $numbers);
        
        // Prepare data for POST request
        $data = array('apikey' => $apiKey, 'numbers' => $numbers, 'sender' => $sender, 'message' => $message);
        // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
	
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
		return response()->json(['success' => false,'message' => 'Otp is not verified successfully'], 422);
    }
}
