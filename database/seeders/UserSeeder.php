<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Ablore',
            'email' => 'admin@ablore.xyz',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now()
        ]);

        $user->assignRole(1);
    }
}
