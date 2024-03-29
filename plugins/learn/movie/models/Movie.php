<?php namespace Learn\Movie\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'learn_movie_';

    /**
     * @var array Validation rules
     */
    //protected $jsonable=['actors'];

    public $belongsToMany = [
        'genres' => [
            'learn\Movie\models\Genre',
            'table' => 'learn_movie_movie_genres',
            'order' => 'genre_title'
        ],

//        'actors'=>[
//            'learn\Movie\models\Actor',
//            'table'=>'learn_movie_actors_movies',
//            'order'=>'name'
//        ],
        'actor' => [
            'learn\Movie\models\Actor',
            'table' => 'learn_movie_actors_movies'
            ,
            'order' => 'name',
//            'order'=>'lastname'
        ]
    ];
    public $attachOne = [
        'poster' => 'System\Models\File'
    ];

    public $attachMany = [
        'gallery' => 'System\Models\File'
    ];

    public $rules = [
    ];
    public static $allowedSortingOptions = array(
        'name desc' => 'Name - desc',
        'name asc' => 'Name - asc',
        'year desc' => 'Year - desc',
        'year asc' => 'Year - asc'
    );


    public function scopeListFrontEnd($query, $options = [])
    {
        extract(array_merge([
            'page' => 1,
            'perPage' => 5,
            'sort' => '',
            'genres' => null,
            'year' => ''
        ], $options));
        if (!is_array($sort)) {
            $sort = [$sort];
        }
        foreach ($sort as $_sort) {
            if (in_array($_sort, array_keys(self::$allowedSortingOptions))) {
                $parts = explode(' ', $_sort);
                if (count($parts) < 2) {
                    array_push($parts, 'desc');
                }
                list($sortField, $sortDirection) = $parts;
                $query->orderBy($sortField, $sortDirection);
            }
        }
        if ($genres !== null) {
            if (!is_array($genres)) {
                $genres = [$genres];
            }
            foreach ($genres as $genre) {
                $query->whereHas('genres', function ($query) use ($genre) {
                    $query->where('id', '=', $genre);});}}
        $lastPage = $query->paginate($perPage, $page)->lastPage();
        if ($lastPage < $page) {
            $page = 1;}
        if ($year) {
            $query->where('year', '=', $year);}
        return $query->paginate($perPage, $page);
    }
}
