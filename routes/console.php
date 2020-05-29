<?php

use App\Mail\ContactMail;
use App\Post;
use App\TariffAddOn;
use App\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

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


Artisan::command('test', function () {

//  $a =   TariffAddOn::query()
//               ->where('id', '=', 3)
//               ->where('price', '=', 100)
//               ->first();
//
//        TariffAddOn::all();
//  dd($a);

    $user = User::first();
    dd($user->internetProvider->name);

});


Artisan::command('send:email', function () {

   Mail::to('tmihajlovic@raf.rs')->send(new ContactMail("Barak Obama"));

});


Artisan::command('create:user', function () {

    /** @var \App\InternetProvider $internetPrivider */
    $internetPrivider = \App\InternetProvider::find(2);
    $internetPrivider->users()->create([
        'email' => 'pera@gmail.com',
        'name' => 'pera',
        'password' => 'pera',
    ]);
//    $user = new User();
//
//    $user->email = 'pera@gmail.com';
//    $user->name = 'Pera';
//    $user->password = 'Pera';
//    $user->internet_provider_id = 1;
//
//    $user->save();
});
