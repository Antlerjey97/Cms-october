<?php namespace Learn\Movie\Models;

use Model;

/**
 * Model
 */
class Genre extends Model
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
    public $table = 'learn_movie_genres';

    /**
     * @var array Validation rules
     */

    public $belongsToMany=[
        'movies'=>[
            'learn\Movie\models\Movie',
            'table'=>'learn_movie_movie_genres',
            'order'=>'name'
        ]
    ];
    protected $fillable=array('genre_title','slug');
    public $rules = [
    ];
}
