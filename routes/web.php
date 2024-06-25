<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Faker\Factory as Faker;

$faker = Faker::create();
$faker->numberBetween(50000, 100000);
Route::get('/', function () {
    return view('home', [
        'greeting' => 'hello',
        'name' => 'Sayan Biswas'
    ]);
});

Route::get('/jobs', function () {
    $jobs = Job::all();
    return view('jobs', [
        'jobs' => $jobs,
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', [
        'job' => $job,
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
