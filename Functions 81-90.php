<?php

/*
VIDEO: PHP Functions 81 - 90
View - https://www.patreon.com/posts/top-100-php-81-23401666
Download - https://www.patreon.com/file?h=23401666&i=3014802
*/

const BR = '<br />';

function pre_r(array $array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

/******** array_push() ********/

$medicine = array('ayahuasca','psilocybin','kambo','5meo-dmt');
pre_r($medicine);
array_push($medicine,'hape','sananga','ajo sacha');
pre_r($medicine);

/******** floor() ********/

echo floor(12.7).BR;
echo floor(-3.5).BR;
echo floor(0.5).BR;

/******** strtotime() ********/

echo strtotime("now").BR;
echo date('jS F, Y',strtotime("now")).BR;
echo date('jS F, Y',strtotime("next week")).BR;
echo date('jS F, Y',strtotime("+1 week 2 days 4 hours 2 seconds")).BR;

/******** htmlspecialchars() ********/

$html = "<img src='https://clevertechie.com/womb-is-the-key.jpg'>";
echo htmlspecialchars($html).BR;

/******** ini_get() ********/

echo 'display_errors = ' .ini_get('display_errors').BR;

/******** ini_set() ********/

ini_set('display_errors','0');
echo ini_get('display_errors').BR;

/******** chr() ********/

echo chr(85).BR;
echo chr(65).BR;
$str = chr(046);
echo "You $str I forever!".BR;

$str = chr(240) . chr(159). chr(144). chr(152);
echo $str.BR;

/******** extension_loaded() ********/

$extensions = array('curl','mbstring','html','mysql','xml','json');
foreach($extensions as $extension){
    echo extension_loaded($extension) ? "$extension is loaded!".BR : "$extension is not loaded!".BR;
}

/******** is_bool() ********/

$a = false;
$b = 0;

if (is_bool($a) === true){
    echo var_export($a)." is a boolean".BR;
}

if (is_bool($b) === false){
    echo var_export($b). " is not a boolean".BR;
}

/******** ksort() ********/

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

pre_r($keywords);
ksort($keywords);
pre_r($keywords);



