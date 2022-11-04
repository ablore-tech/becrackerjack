<?php

namespace Database\Seeders;

use App\Models\Vertical;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VerticalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
               'name' => 'School'
            ],
            [
                'name' => 'College'
            ],
            [
                'name' => 'Advance'
            ]
        ];

        foreach($roles as $role)
        {
            Vertical::create([
                'name' => $role['name']
            ]);
        }
    }
}
