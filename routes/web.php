<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Prospect\Create as ProspectCreate;
use App\Http\Livewire\Github\Index as GithubIndex;
use App\Http\Livewire\Github\Show as GithubShow;
use App\Http\Livewire\User\Index as UserIndex;
use App\Http\Livewire\User\Create as UserCreate;
use App\Http\Livewire\User\ProfilePassword;
use App\Http\Livewire\User\Profile;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login', Login::class)->middleware('guest')
    ->name('login');

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::get('users/register/{prospect:token}', UserCreate::class)
    ->name('users.store');

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');

    Route::view('/', 'layouts.app')->name('home');

    Route::get('users', UserIndex::class)
        ->name('users.index');
    Route::get('profile', Profile::class)
        ->name('profile');
    Route::get('profile/password', ProfilePassword::class)
        ->name('profile.password');

    Route::get('prospects/create', ProspectCreate::class)
        ->name('prospects.create');

    Route::get('github-users', GithubIndex::class)
        ->name('github.index');
    Route::get('github-users/{login}', GithubShow::class)
        ->name('github.show');
});
