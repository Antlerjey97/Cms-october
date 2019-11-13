<?php namespace Learn\Movie\Models;

use Model;

/**
 * Model
 */
class Actor extends Model
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
    public $table = 'learn_movie_actors';

    public $belongsToMany=[

        'movies'=>[
            'learn\Movie\models\Movie',
            'table'=>'learn_movie_actors_movies',
            'order'=>'name'
        ]
    ];
    public function getFullNameAttribute(){
        return $this->name ." ".$this->lastname;
    }

    /**
     * @var array Validation rules
     */
protected $fillable=array('name','lastname');

    public $attachOne=[
        'actorimage'=>'System\Models\File'
    ];

    public $rules = [
    ];
}
