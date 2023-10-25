<?php

/*
VIDEO: PHP Functions 21 - 30
View - https://www.patreon.com/posts/top-100-php-21-22470629
Download - https://www.patreon.com/file?h=22470629&i=2815682
*/

const BR = '<br />';

function pre_r(array $array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

/************ dirname() ************/

//C:\localhost\php\top-100-php-functions
// https://www.w3schools.com/php/func_filesystem_dirname.asp
echo dirname('C:\localhost\php\top-100-php-functions').BR;
//current directory
echo __DIR__.BR;
echo dirname(__DIR__).BR;
//include project settings
include_once(__DIR__.'/settings.php');
echo BR;
include_once(dirname(__DIR__).'/global-settings.php');
echo BR;
/*************** function_exists() ***************/
echo function_exists('dirname');
echo function_exists('include_once');
$games = array('RPG' => 'Mass Effect 3', 'MMORPG' => 'World of Warcraft', 'Strategy' => 'StarCraft 2');
function_exists('pre_r') ? pre_r($games) : print_r($games);

/************ array_map() ************/
// https://www.w3schools.com/php/func_array_map.asp
function square($num){
    return ($num * $num);
}

$numbers = array(1,2,3,4,5,6,7,8,9,10);
pre_r(array_map('square',$numbers));

$movies = array('The Matrix', 'Braveheart', 'Limitless', 'Interstellar');
$genres = array('Science Fiction', 'Action', 'Thriller', 'Drama');
$years = array(1999, 1995, 2001, 2014);

function show_movies($movie, $genre, $year){
    return ("$movie is $genre and was released in $year");
}

pre_r(array_map('show_movies', $movies, $genres, $years));
pre_r(array_map(null,$movies,$genres,$years));

/************ get_class() ************/

abstract class Species {

    const BR = '<br />';

    public function __construct() {
        echo get_class($this).self::BR;
        echo get_class().self::BR;
    }
}

class Animal extends Species {
    function class_name(){
        echo "My class name is: ".get_class($this);
    }
}

$tiger = new Animal; //tiger is an object of class Animal
echo "results of get_class: ".get_class($tiger).BR; //external call
echo "results from calling member function: ".$tiger->class_name().BR; //internal call

/************ class_exists() ************/
if (class_exists('Animal')){
	  echo "creating new class animal".BR;
    $cat = new Animal;
}

/************ is_object() ************/

echo is_object($cat) ? "The variable is an object of class ".get_class($cat).BR : "The variable is not an object".BR;

/************ time() and date() ************/
echo time().BR;
$nextWeek = time() + (7 * 24 * 60 * 60); //7 days, 24 hours, 60 mins, 60 secs
echo date('Y-m-d', $nextWeek).BR;
echo date('Y-m-d', strtotime('+1 Week')).BR;
echo date('Y-m-d', strtotime('+3 Days')).BR;
echo date('Y-m-d', strtotime('+1 Month')).BR;
echo BR;
/************ json_encode ************/
// https://www.w3schools.com/php/func_json_encode.asp
echo "RESULTS OF JSON_ENCODE".BR;
echo "----------------------".BR;
$movies = array('The Matrix', 'Braveheart', 'Limitless', 'Interstellar');
echo json_encode($movies).BR;
$array = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
echo json_encode($array);
echo BR;

/******** json_decode() ********/
echo "RESULTS OF JSON_DECODE".BR;
echo "----------------------".BR;

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
pre_r(json_decode($json, true));

/************ is_null() ************/
//$variable = null;
$variable = '';
echo is_null($variable) ? "the variable is null!" : "the variable is not null!";
