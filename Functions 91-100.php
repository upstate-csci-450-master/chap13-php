<?php

/*
VIDEO: PHP Functions 91 - 100
View - https://www.patreon.com/posts/top-100-php-91-23600441
Download - https://www.patreon.com/file?h=23600441&i=3062501
*/

const BR = '<br />';

function pre_r(array $array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}


/******** array_reverse ********/

$archetypes = array('king','warrior','magician','lover');
pre_r($archetypes);
$reverse = array_reverse($archetypes,true);
pre_r($reverse);

$keywords = array(
    'm' => 'mother',
    'w' => 'womb',
    's' => 'source',
    'c' => 'connection',
    'h' => 'home',
    'l' => 'love',
    'i' => 'innocence',
    'c' => 'childhood',
    'm' => 'magic',
    'e' => 'ecstacy',
    'j' => 'joy',
    'b' => 'bliss',
    's' => 'story');

ksort($keywords);
pre_r($keywords);
$rev_keywords = array_reverse($keywords);
pre_r($rev_keywords);

/******** ord ********/

echo ord('C').BR;

/******** uniqid ********/

echo uniqid('clever-',true).BR;

/******** strtr ********/

$text = 'clever techie is a genius';
echo strtr($text,'e','a');

/******** array_diff ********/

$animals1 = array('Wolf','Jaguar','Eagle','Dolphin','Bear');
$animals2 = array('Wolf','Jaguar','Eagle','Cow','Pig','Deer','Cat');
$result = array_diff($animals2,$animals1);
pre_r($result);

/******** error_reporting ********/

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

/******** ceil ********/

echo ceil(5.2).BR;
echo ceil(-4.2).BR;
echo ceil(.09).BR;

/******** urlencode ********/

$user_query = 'best digital camera 2019';
$string = 'search.php?query='.urlencode($user_query);
echo $string.BR;

/******** min ********/

echo min(3,5,100,2000,32,1).BR;

/******** print_r ********/

$result = print_r($keywords,true);
echo $result;