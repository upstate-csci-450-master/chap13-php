<?php

/*
VIDEO: PHP Functions 11 - 20
View - https://www.patreon.com/posts/top-100-php-11-22335695
Download - https://www.patreon.com/file?h=22335695&i=2784762
*/

const BR = '<br />';

function pre_r( $array ) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

/*** preg_match() ***/
// https://www.w3schools.com/php/func_regex_preg_match.asp
$text = '<img src="https://clevertechie.com/img/main/carousel-tn.png">';
preg_match("!img src=\"(.*?).(png)\"!",$text,$match);
pre_r($match);

/*** sprintf() ***/
$number = 10;
$animals = 'seagulls';
$location = 'beach';
$number2 = 44;
$insects = 'butterflies';

$format = 'There are %d %s by the %s, and %f %s';
echo sprintf($format, $number, $animals, $location, $number2, $insects);

echo BR;
/*** trim() ***/
// https://www.w3schools.com/php/func_string_trim.asp
$text = ' Clever Techie ';
echo trim($text, 'Ce');
echo trim($text);

echo BR;
/*** strtolower ***/
$text = "Let's Create Something Awesome with PHP!";
echo strtolower($text);

echo BR;

/*** file_exists ***/
//$file = 'E:\Favorites\ONE\Words\Nature\nature1.gif';
$file = "function.png";
if (file_exists($file)){
    echo "The $file exists!";
}
else {
    echo "$file doesn't exist!";
}

echo BR;

/*** is_string ***/

$values = array(false, true, null, 'abc', '23', 23, '23.5', 23.5, '', ' ', '0', 0);

foreach ($values as $value){
    echo "is_string(";
    var_export($value);
    echo ") = ";
    echo var_dump(is_string($value));
}
echo BR;
$text = 'Clever Techie';
if (is_string($text)){
    echo "the text is a string!";
}
echo BR;
/*** preg_replace ***/
$html = "<strong>I love PHP it's the best programming language!</strong>";
echo $html.BR;
$html = preg_replace("!<strong>(.*?)</strong>!","<i>$1</i>",$html);
echo $html.BR;

/*** file_get_contents ***/
$file = file_get_contents('https://google.com');
//echo $file;
echo BR;
/*** array_key_exists ***/
$array = array('year' => 2004, 'make' => 'Acura', 'model' => 'RSX');

foreach ($array as $key => $value)
if (array_key_exists($key,$array)){
    echo "the $key exists!";
}
else {
    echo "the $key doesn't exist!";
}

/*** array_keys ***/
pre_r(array_keys($array));
