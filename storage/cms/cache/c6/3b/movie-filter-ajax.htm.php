<?php 
use Learn\Movie\Models\Movie;use Learn\Movie\Models\Genre;class Cms5dcbd30705543526756010_a53fbd0bafb0444e5b7dce0e8f7fd40dClass extends Cms\Classes\PageCode
{

            
public function onStart() {
            $this->prepareVars();
            $this->prepareYears();
}
public function onFilterMovies() {
$this->prepareVars(); }
public function prepareVars() {
$options = post('Filter', []);

$this['movies'] = Movie::listFrontEnd($options);
$this['genres'] = Genre::all();
$this['sortOptions'] = Movie::$allowedSortingOptions;


$this['pages'] = $this['movies']->lastPage();
$this['page'] = $this['movies']->currentPage();


}
//Year -Movies
public function prepareYears() {
$movies = Movie::all();
$years = [];

foreach($movies as $movie){
$years[] = $movie->year;
}

$years = array_unique($years);

$this['years'] = $years;
}
}
