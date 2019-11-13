<?php
use Learn\Movie\Models\Movie;
use Learn\Movie\Models\Actor;
use Learn\Movie\Models\Genre;


Route::get('seed-actors',function (){


    $faker = Faker\Factory::create();
    for ($i = 0; $i < 100; $i++) {


        Actor::create([
            'name' => $faker->firstName,
            'lastname' => $faker->lastName,

        ]);
    }
    return "Actors Created!";
});

Route::get('/populate-movies', function(){

    $faker = Faker\Factory::create();

    $movies = Movie::all();


    foreach ($movies as $movie) {

        $genres = Genre::all()->random(1);

       $movie->genres = $genres;

        $movie->created_at = $faker->date($format = 'Y-m-d H:i:s', $max = 'now');
        $movie->pulished = $faker->boolean($chanceOfGettingTrue = 50);

        $movie->save();

    }


    return $movies;

});
Route::get('sitemap',function(){

    $movie= Movie::all();
    $genres =Genre::all();

//    dd($movie);
    return Response::view('learn.movie::sitemap',['movie'=>$movie,'genres'=>$genres])->header('Content-Type','text/xml');

});



?>

