<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    $fromDate = rand(strtotime('2019-12-01'), strtotime('2020-12-31'));
    $toDays = rand(1,365);
    $toDate = strtotime(date('Y-m-d',$fromDate)." + {$toDays} days");
    $startTime = rand(0,12);
    $endTime = rand($startTime + 1, 23);
    
    $fromTime = $startTime.":00:00";
    $endTime = $endTime.":00:00";

    $days = range(0, 6);
    shuffle($days);
    $dow = array_slice($days, 0,rand(0,6) );
    $dow = implode(',',$dow);
    
    return [
            'event_name' => $faker->sentence(5),
            'from_date' => date('Y-m-d', $fromDate),
            'to_date' => date('Y-m-d', $toDate),
            'from_time' => $fromTime,
            'to_time' => $endTime,
            'dow' => $dow
    ];
});
