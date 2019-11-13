<?php 
use Learn\Movie\Models\Movie;class Cms5dcbd2f70b556727069600_e1258fc6922ab7386c7efd2002f3afbbClass extends Cms\Classes\PageCode
{

public function onStart(){

  $this['movies']=Movie::orderBy('year','desc')->paginate(20);


}
}
