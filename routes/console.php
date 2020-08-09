<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

//Generates Admin User
Artisan::command('admin:create', function () {
    $name = 'Admin';
    $email = 'admin@admin.com';
    $pwd = Hash::make('qwertyqwe');
    // $pwd = $this->secret('123'); // or use secret() to hide the password being inputted
    \DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'password' => $pwd,
            'created_at' => date_create()->format('Y-m-d H:i:s'),
            'updated_at' => date_create()->format('Y-m-d H:i:s'),
    ]);
    $this->info('Admin user Created Successfully');
});