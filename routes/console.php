<?php

use App\Post;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

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


Artisan::command('test:test', function () {

    $post = new Post();
    $post->slug = 'patke';
    $post->body = 'Blog o patkama';
    $post->title = 'Patke su najbolje';
    $post->save();


    $post = Post::query()
                ->where('slug', '=', 'patke')
                ->first();

    dd($post);

});
