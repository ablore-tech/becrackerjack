<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = User::role('teacher')->get();

        return view('admin.teacher', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $teacher)
    {
        $teacher->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number
        ]);

        return back();
    }

    public function updateData(Request $request)
    {
        $teacher = User::find($request->id);
        $teacher->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number
        ]);

        $teacher->userDetail()->update([
            'first_name' => $request->name
        ]);
        return back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateStatus(User $teacher)
    {
        $teacher->status = !$teacher->status;
        $teacher->save();

        return back();
    }

    public function getProfile(User $user)
    {
        $user = User::with('userDetail')->find($user->id);
        return view('teacher.profile', compact('user'));
    }

    public function updateProfile(UpdateTeacherRequest $request, User $user)
    {
        $user->update([
            'name' => $request->input('first_name') . ' ' . $request->input('last_name'),
            'email' => $request->input('email')
        ]);
        $profileFilePath = $user->userDetail->profile_image;
        $coverFilePath = $user->userDetail->cover_image;
        // Define folder path
        $folder = '/uploads/images/';
        if($request->file('profile_image')) 
        {
            $profileImage = $request->file('profile_image');
            // Make a image name based on user name and current timestamp
            $profileImageName = Str::slug($request->input('phone_number')) . '_' . time();
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $profileFilePath = $folder . $profileImageName . '.' . $profileImage->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($profileImage, $folder, 'public', $profileImageName);
        }

        if($request->file('cover_image'))
        {
            $coverImage = $request->file('cover_image');
            // Make a image name based on user name and current timestamp
            $coverImageName = Str::slug($request->input('phone_number')) . '_' . time();
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $coverFilePath = $folder . $coverImageName . '.' . $coverImage->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($coverImage, $folder, 'public', $coverImageName);
        }
        // $aadharImage = $request->file('aadhar_image');
        // Make a image name based on user name and current timestamp
        // $aadharImageName = Str::slug($request->input('phone_number')) . '_' . time();
        // Make a file path where image will be stored [ folder path + file name + file extension]
        // $aadharFilePath = $folder . $aadharImageName . '.' . $aadharImage->getClientOriginalExtension();
        // Upload image
        // $this->uploadOne($aadharImage, $folder, 'public', $aadharImageName);

        // $panImage = $request->file('pan_image');
        // Make a image name based on user name and current timestamp
        // $panImageName = Str::slug($request->input('phone_number')) . '_' . time();
        // Make a file path where image will be stored [ folder path + file name + file extension]
        // $panFilePath = $folder . $panImageName . '.' . $panImage->getClientOriginalExtension();
        // Upload image
        // $this->uploadOne($panImage, $folder, 'public', $panImageName);
        // Set user profile image path in database to filePath
        $user->userDetail()->update($request->userData());

        $user->userDetail()->update([
            'profile_image' => $profileFilePath,
            'cover_image' => $coverFilePath,
            // 'aadhar_image' => $aadharFilePath,
            // 'pan_image' => $panFilePath
        ]);

        return back();
    }

    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25);

        $file = $uploadedFile->storeAs($folder, $name . '.' . $uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }
}
