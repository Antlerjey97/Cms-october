<?php 
use Learn\Movie\Models\Movie;class Cms5dcbd2edaab20536101578_02f0cdd54aba4936b738ad18837a3c2fClass extends Cms\Classes\PageCode
{

public function onStart(){
    $this['movies']=Movie::take(4)->get();

}
}
