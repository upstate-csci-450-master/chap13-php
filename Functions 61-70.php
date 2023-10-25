<?php

/*
VIDEO: PHP Functions 61 - 70
View - https://www.patreon.com/posts/top-100-php-61-23060585
Download - https://www.patreon.com/file?h=23060585&i=2940039
*/

const BR = '<br />';

function pre_r(array $array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

/******** mkdir() ********/

//mkdir('C:\localhost\php\top-100-php-functions\new-folder\sub-folder\another-sub-folder\etc',0777,true);

/******** is_callable() ********/

$print_array = 'pre_r';
echo is_callable($print_array,false,$callable_name).BR;
echo $callable_name.BR;

/******** ltrim() ********/

$text = 'Clever Techie';
echo ltrim($text,'Cl').BR;

/******** ob_start() ********/

ob_start();
$hello = 'Welcome to my awesome web site!';
echo $hello;
$content = ob_get_contents();
ob_end_clean();
echo $content;

ob_start("callback");

function callback($buffer){
    return str_replace("C++","PHP",$buffer);
}

?>

<!-- buffer content (output) -->
<html>
<body>
<p>Clever Techie's favorite programming language is C++.</p>
</body>
</html>

<?php

/******** round() ********/

echo round(4.2).BR; //4
echo round(2.95592, 2).BR; //2.96
echo round(5.045,2).BR; //5.05

echo round(4.5, 0, PHP_ROUND_HALF_UP).BR;
echo round(4.5, 0, PHP_ROUND_HALF_DOWN).BR;
echo round(4.5, 0, PHP_ROUND_HALF_EVEN).BR;
echo round(4.5, 0, PHP_ROUND_HALF_ODD).BR;

/******** fwrite() ********/

$handle = fopen('new-file.txt','w');
fwrite($handle,'Love is unity!');

/******** array_unique() ********/

$animals = array('Cat','Dog','Flamingo','Rooster','Cat','Dog','Bear','Wolf','Wolf','Beaver');
pre_r($animals);
$unique_animals = array_merge(array_unique($animals));
pre_r($unique_animals);

/******** array_search() ********/

echo $unique_animals[array_search('Wolf',$unique_animals)].BR;

/******** reset() ********/

echo current($unique_animals).BR;
echo next($unique_animals).BR;
echo next($unique_animals).BR;
echo next($unique_animals).BR;
echo reset($unique_animals).BR;

/******** array_unshift() ********/

$store_array = array_unshift($unique_animals,'Eagle','Horse','Cow','Zebra');
pre_r($unique_animals);
echo $store_array;
?>