<?php

/*
VIDEO: PHP Functions 41 - 50
View - https://www.patreon.com/posts/top-100-php-41-22718538
Download - https://www.patreon.com/file?h=22718538&i=2866213
*/

const BR = '<br />';

function pre_r(array $array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

/********** file_put_contents() **********/

$content = 'It is a good day to die';
file_put_contents('cheat-code.txt',$content);

$more = " --WarCraft 2 cheat code";
file_put_contents('cheat-code.txt',$more,FILE_APPEND | LOCK_EX);

$current = file_get_contents('cheat-code.txt');
$current .= " (invincible to enemy attacks)";
file_put_contents('cheat-code.txt',$current);

/********** rtrim() **********/

$string = 'We are all one ';
var_dump($string);
echo BR;
$trimmed = rtrim($string);
var_dump($trimmed);
echo BR;
$trim = rtrim($trimmed, ' one');
var_dump($trim);

/********** array_pop() **********/

$cards = array('spades','hearts','clubs','diamonds');
pre_r($cards);
$card = array_pop($cards);
pre_r($cards);
echo BR;
echo $card.BR;

/********** unlink() **********/

$content = 'Love, Consciousness, Truth';
file_put_contents('one.txt',$content);
unlink('one.txt');

/********** basename() **********/

$dir = "C:\localhost\php\top-100-php-functions\cheat-code.txt";
echo basename($dir,'.txt');
echo BR;

/********** realpath() **********/

$dir = '/windows/system32';
echo realpath($dir);
echo BR;

/********** call_user_func() **********/

function favorite_game($game, $type){
    echo "I love to play $game, it's my favorite $type game!";
}

$function_name = 'favorite_game';
call_user_func($function_name,'Witcher 3', 'XBOX 360');
echo BR;

class Cards {
    static function pick_card(){
        $cards = array('King','Queen','Jack','Ace','Ten');
        echo $cards[array_rand($cards)];
    }
}

call_user_func(array('Cards','pick_card'));
echo BR;
call_user_func('Cards::pick_card');
echo BR;

/********** call_user_func_array() **********/

function favorite_movie($movie,$type,$year){
    echo "I love to watch $movie, it's my favorite $type movie which came out in $year!";
}

$function_name = 'favorite_movie';
$paramters = array('Braveheart','Drama',1995);

call_user_func_array($function_name,$paramters);
echo BR;

/********** fopen() **********/

$resource = fopen('C:/localhost/php/top-100-php-functions/cheat-code.txt',"a");
var_dump($resource);
fwrite($resource,PHP_EOL.'Every little thing she does');
fclose($resource);
echo BR;

/********** microtime() **********/

$time_start = microtime(true);
usleep(2000000); // 2seconds, 1 micro second = 1,000,000 micro seconds
$time_end = microtime(true);
$time_elapsed = $time_end - $time_start;

echo "Did nothing in $time_elapsed seconds!";
