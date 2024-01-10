<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $saveUser = new User();

        $saveUser->name = "Maselag Cakes";

        $saveUser->email = "adurbarbra@gmail.com";

        $saveUser->password = Hash::make("admin123@");

        $saveUser->remember_token = Str::random(12);

        try {
            $saveUser->save();
        } catch (\Throwable $th) { }        

    }
}
