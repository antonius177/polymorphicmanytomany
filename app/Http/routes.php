<?php
use App\Post;
use App\Tag;
use App\vidio;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function (){
	$post = Post::create(['name' => 'my first post']);
	
	
	$tag1 = Tag::find(1);
	
	$post->tags()->save($tag1);
	
	$vidios = Vidio::create(['name'=>'my first vidio']);
	$tag2 = Tag::find(2);
	$vidios->tags()->save($tag2);
});