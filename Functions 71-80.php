<?php

/*
VIDEO: PHP Functions 71 - 80
View - https://www.patreon.com/posts/top-100-php-71-23214451
Download - https://www.patreon.com/file?h=23214451&i=2973190
*/

const BR = '<br />';

function pre_r(array $array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

/******** parse_url() ********/

pre_r(parse_url('https://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=camcorder'));

pre_r(parse_url('http://username:password@hostname:9090/path?arg=value#anchor'));

$url = 'http://clevertechie:cosmicmother@hostname:0712/path?arg=value#lifeanchor';

echo parse_url($url,PHP_URL_PASS);

/******** func_get_args() ********/

function multiply($num1,$num2,$num3){
    echo '<pre>';
    print_r(func_get_args());
    echo '</pre>';
    echo func_num_args().BR;
    return $num1*$num2*$num3;
}

function average(){
    return array_sum(func_get_args())/func_num_args();
}

echo multiply(5,8,12).BR;
echo average(8,12,16).BR;

/******** end() ********/

$animals = array('Wolf','Eagle','Tiger','Cat','Bear','Deer','Snake');
echo end($animals).BR;
echo reset($animals).BR;

/******** base64_encode() ********/

$text = 'The secret of the Universe is the Mother'.BR;
$encode = base64_encode($text);
echo $encode.BR;
echo base64_decode($encode).BR;

/******** unserialize() ********/

$spiral_dynamics = array('Biege','Purple','Red','Blue','Orange','Green','Yellow','Turquoise');
echo serialize($spiral_dynamics);
$serialized = serialize($spiral_dynamics);
pre_r(unserialize($serialized));

/******** max() ********/

echo max(5,333,22,1212,2020);

/******** preg_split() ********/

$words = "nature beauty unity,love=consciousness+mother&earth universe";
$keywords = preg_split("![\s,=+&]!",$words);
pre_r($keywords);

/******** gettype() ********/

$variables = array(array(),100,'hello',2.1,null,new stdClass);
foreach ($variables as $value) {
    echo gettype($value).BR;
}

/******** strrpos() ********/

echo strpos($words,'love').BR;
echo strpos($words,'love') ? 'word found!'.BR : 'word not found!'.BR;

/******** version_compare() ********/

echo PHP_VERSION.BR;
if (version_compare(PHP_VERSION, '5.0.0', '>=')){
    echo 'My version of PHP is at least 5.0.0!'.BR;
}