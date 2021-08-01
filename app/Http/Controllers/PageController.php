<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Faker;

class PageController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
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
        return view('pages/dashboard', [
            // Specify the base layout.
            // Eg: 'side-menu', 'simple-menu', 'top-menu', 'login'
            // The default value is 'side-menu'

            'layout' => 'side-menu'
        ])->with("fakers", $fakerData);
    }
}
