<?php

/*
VIDEO: PHP Functions 51 - 60
View - https://www.patreon.com/posts/top-100-php-51-22875484
Download - https://www.patreon.com/file?h=22875484&i=2900368
*/

const BR = '<br />';

function pre_r(array $array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

/******** fclose() ********/

$handle = fopen('newfile.txt','w');
fwrite($handle,'something');
fclose($handle); //closes the file pointer opened by fopen

/******** is_int() ********/

$values = array(23,'23',23.5,'23.5',null,true,false);
echo '<pre>';
foreach ($values as $value){
    echo "is_int(";
    var_export($value);
    echo ") = ";
    var_dump(is_int($value)); //evalute for true or false if integer
}

/******** is_file() ********/

var_dump(is_file('C:\localhost\php\top-100-php-functions\newfile.txt'));

/******** array_slice() ********/

$spiral_dynamics = array('Biege','Purple','Red','Blue','Orange','Green','Yellow','Turquoise');
pre_r($spiral_dynamics);

$chunk = array_slice($spiral_dynamics,-2,2);

pre_r($chunk);

$spiral_dynamics = array('stage1' => 'Biege', 'stage2' => 'Purple', 'stage3' => 'Red',
    'Blue', 'Orange', 'Green', 'Yellow', 'Turquoise');

$chunk = array_slice($spiral_dynamics,0,4);
pre_r($chunk);

/******** preg_match_all() ********/

//<a class="link-secondary" href="/currencies/bitcoin/">BTC</a>

/*
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,"https://coinmarketcap.com");
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
$content = curl_exec($curl);

preg_match_all('!<a class="link-secondary" href="/currencies/.*?/">(.*?)</a>!',$content,$matches);

//$matches[0]
pre_r($matches[1]);
 */

/******** ucfirst() ********/

$name = 'clever techie';
echo ucfirst($name).BR; //Clever techie
$name = 'CLEVER TECHIE';
echo ucfirst(strtolower($name)).BR; //Clever techie

/******** intval() ********/

$values = array(42,4.2,'42','+42','-42',null,'042',false);
foreach ($values as $value) {
    echo intval($value).BR;
}

/******** str_repeat() ********/

echo str_repeat('--*=$--|',10).BR;

/******** serialize() ********/

//s:size:value;
echo serialize('Clever Techie').BR;

//i:value;
echo serialize(100).BR;

//a:size:{key definition;value definition;}
pre_r($spiral_dynamics);
echo serialize($spiral_dynamics).BR;

/******** array_filter() ********/

function filter($value){
    return ($value === 42);
}

pre_r($values);
$result = array_filter($values, 'filter');
pre_r($result);