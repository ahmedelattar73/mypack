<?php
Route::get('mypack/{name}',function($name){
    return "welcome ".$name;
});