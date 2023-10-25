<?php

/*
VIDEO: PHP Functions 31 - 40
View - https://www.patreon.com/posts/top-100-php-31-22580003
Download - https://www.patreon.com/file?h=22580003&i=2839132
*/

//header("Location: https://clevertechie.com");
//header("refresh:5;url=https://clevertechie.com");
//echo "You'll be redirected in about 5 secs. If not, click <a href='https://clevertechie.com'>here</a>."; 

defined('BR') OR define('BR', '<br />');

function pre_r( $array ) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

/******** is_numeric() ********/

$numbers = array(100, 0x539, '42', 5.5, null, 'clever techie');
foreach($numbers as $value) {
    if (is_numeric($value)){
        echo var_export($value). ' is numeric!' . BR;
    }
    else {
        echo var_export($value). ' is NOT numeric!' . BR;
    }
}

echo BR;

/******** array_shift() ********/

$stack = array('orange','banana','apple','raspberry');

echo 'before array_shift():'. BR;

pre_r($stack);

echo 'after array_shift():' . BR;
$fruit = array_shift($stack);

pre_r($stack);

echo 'caught fruit: '.$fruit.BR;

/******** defined() ********/

echo defined('BR');

/******** is_dir() ********/

echo BR;

echo is_dir('E:\Favorites\ONE\Wallpapers') ? "it's a directory!" : "not a directory :(";

/******** json_decode() ********/
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
pre_r(json_decode($json, true));

/******** header() ********/

//header("Location: https://clevertechie.com");

/******** strtoupper() ********/

$text = "Once more into the fray, into the last good fight I'll ever know,"
        . "live and die on this day, live and die on this day.";
echo strtoupper($text);

/******** array_values() ********/

$games = array('Atari' => 'Prince of Persia', 'Sega' => 'Sonic', 'PC' => 'Heroes 3');
pre_r(array_values($games));

/******** md5() ********/

$image = 'Romantically_Apocalyptic_heroes_comics_comic_sci_fi_futuristic_dark_cat_cats_glow_magic_radiation_fantasy_2000x1248.jpg';
echo md5($image);

/******** method_exists() ********/

class Human {
    public function eat () {
        
    }
    public function sleep () {
        
    }
    public function sex () {
        
    }
}
$i = new Human;
echo method_exists($i, 'drink') ? "method exists!" : "method doesn't exist!";