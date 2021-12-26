<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name' => 'Hossam',
           'email' => 'hossam@hossam.com',
           'password' => '123456',
        ]);

        User::create([
            'name' => 'Ahmed',
            'email' => 'ahmed@ahmed.com',
            'password' => '123456',
            'manager_id' => 1
        ]);

        User::create([
            'name' => 'Ali',
            'email' => 'ali@ali.com',
            'password' => '123456',
            'manager_id' => 1
        ]);

        User::create([
            'name' => 'Sara',
            'email' => 'sara@sara.com',
            'password' => '123456',
            'manager_id' => 2
        ]);

        User::create([
            'name' => 'Sally',
            'email' => 'sally@sally.com',
            'password' => '123456',
            'manager_id' => 3
        ]);

        User::create([
            'name' => 'Hazem',
            'email' => 'hazem@hazem.com',
            'password' => '123456',
        ]);

        User::create([
            'name' => 'Mai',
            'email' => 'mai@mai.com',
            'password' => '123456',
            'manager_id' => 6
        ]);

        User::create([
            'name' => 'Radwa',
            'email' => 'radwa@radwa.com',
            'password' => '123456',
            'manager_id' => 6
        ]);

        User::create([
            'name' => 'Mazen',
            'email' => 'mazen@mazen.com',
            'password' => '123456',
            'manager_id' => 6
        ]);

        User::create([
            'name' => 'Fawzy',
            'email' => 'fawzy@fawzy.com',
            'password' => '123456',
            'manager_id' => 9
        ]);

//        User::factory(100)->create()->each(function ($user){
//            $user->manager_id = $user->id - 1;
//            $user->save();
//        });
    }
}
