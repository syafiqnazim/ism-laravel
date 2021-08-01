<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\View\Composers\FakerComposer;
use App\Faker;

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

Route::get("/", function () {
    return view("welcome");
});

Route::middleware('auth')->group(function() {
        $fakerData = [];
        for ($i = 0; $i < 20; $i++) {
            $fakerData[] = [
                "users" => Faker::fakeUsers(),
                "photos" => Faker::fakePhotos(),
                "images" => Faker::fakeImages(),
                "dates" => Faker::fakeDates(),
                "times" => Faker::fakeTimes(),
                "formatted_times" => Faker::fakeFormattedTimes(),
                "totals" => Faker::fakeTotals(),
                "true_false" => Faker::fakeTrueFalse(),
                "stocks" => Faker::fakeStocks(),
                "products" => Faker::fakeProducts(),
                "news" => Faker::fakeNews(),
                "files" => Faker::fakeFiles(),
                "jobs" => Faker::fakeJobs(),
                "notification_count" => Faker::fakeNotificationCount(),
                "foods" => Faker::fakeFoods(),
            ];
        }
    // Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
});

// Route::middleware(["auth"])
//     ->get("/dashboard", function () {
//         $fakerData = [];
//         for ($i = 0; $i < 20; $i++) {
//             $fakerData[] = [
//                 "users" => Faker::fakeUsers(),
//                 "photos" => Faker::fakePhotos(),
//                 "images" => Faker::fakeImages(),
//                 "dates" => Faker::fakeDates(),
//                 "times" => Faker::fakeTimes(),
//                 "formatted_times" => Faker::fakeFormattedTimes(),
//                 "totals" => Faker::fakeTotals(),
//                 "true_false" => Faker::fakeTrueFalse(),
//                 "stocks" => Faker::fakeStocks(),
//                 "products" => Faker::fakeProducts(),
//                 "news" => Faker::fakeNews(),
//                 "files" => Faker::fakeFiles(),
//                 "jobs" => Faker::fakeJobs(),
//                 "notification_count" => Faker::fakeNotificationCount(),
//                 "foods" => Faker::fakeFoods(),
//             ];
//         }
//         return view("pages/dashboard")->with("fakers", $fakerData);;
//     })
//     ->name("dashboard");
