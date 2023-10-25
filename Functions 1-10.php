<?php

/*
VIDEO: PHP Functions 1 - 10
View - https://www.patreon.com/posts/top-10-php-1-10-22152401
Download - https://www.patreon.com/file?h=22152401&i=2751774
*/

const BR = '<br />';

/*       count()      */
// https://www.w3schools.com/php/func_array_count.asp
$array = array(12.5, 'fox','bear','deer','cat', 100, 'dog','elephant','wolf');
$multi_array = array(12.5, 'fox','bear','deer','cat', 100, 'dog','elephant','wolf',
          array(array('orange','black','white','yellow','purple','red')));

echo count($array) . BR; //9
echo count($multi_array) . BR; //10
echo count($multi_array, COUNT_RECURSIVE) . BR; //17

/*       is_array()      */
if (is_array($array)){ //true
    echo "The variable is an array!" . BR;
}
else {
    echo "The variable is not an array!" . BR;
}

/*       substr()      */
$text = "clever techie is awesome";
echo substr($text, 0) . BR; // clever techie is awesome
echo substr($text, 7,6) . BR; // techie
echo substr($text, 0,6) . BR; // clever
echo substr($text, -1) . BR; // e
echo substr($text,-7) . BR; //awesome

/*       in_array()      */
// https://www.w3schools.com/php/func_array_in_array.asp
if (in_array('12.5', $array)){ //true
    echo "Value found in the array!" . BR;
}
if (in_array('12.5', $array, true)) { //false
    echo "Value found in the array!" . BR;
}
if (in_array(100, $array, true)) { //true
    echo "Value found in the array!" . BR;
}

/*       explode()      */
// https://www.w3schools.com/php/func_string_explode.asp
$colors = "red, orange, black, white, cyan, teal, purple, pink";
$colors_array = explode(', ',$colors);
print_r($colors_array); echo "<BR>";
/*
Array
(
    [0] => red
    [1] => orange
    [2] => black
    [3] => white
    [4] => cyan
    [5] => teal
    [6] => purple
    [7] => pink
)
 */
$columns = "bob|nancy|rachel|molly|victoria";
$columns_array = explode('|',$columns);
print_r($columns_array); echo "<BR>";
/*
Array
(
    [0] => bob
    [1] => nancy
    [2] => rachel
    [3] => molly
    [4] => victoria
)
 */

$colors_array = explode(', ',$colors, 2);
print_r($colors_array); echo "<BR>";
/*
Array
(
    [0] => red
    [1] => orange, black, white, cyan, teal, purple, pink
)
 */
$columns = explode("|",$columns,-1);
print_r($columns); echo "<BR>";
/*
Array
(
    [0] => bob
    [1] => nancy
    [2] => rachel
    [3] => molly
)
 */

/*      str_replace()      */
// https://www.w3schools.com/php/func_string_str_replace.asp
$bodytag = str_replace("%body%", "red", "<body text='%body%'>");
echo $bodytag . BR; //<body text='black'>

$vowels = array('a','e','i','o','u','A','E','I','O','U');
$text = "clever techie is awesome I love your videos";
echo str_replace($vowels,"",$text) . BR; //clvr tch s wsm lv yr vds

/*      implode()      */
// https://www.w3schools.com/php/func_string_implode.asp
$glued = implode(", ",$array);
echo $glued . BR; //12.5, fox, bear, deer, cat, 100, dog, elephant, wolf

/*      strlen()      */
echo strlen($glued) . BR; //52

/*      array_merge()      */
// https://www.w3schools.com/php/func_array_merge.asp
$merged_array = array_merge($vowels,$array);
print_r($merged_array);
/*
Array
(
    [0] => a
    [1] => e
    [2] => i
    [3] => o
    [4] => u
    [5] => A
    [6] => E
    [7] => I
    [8] => O
    [9] => U
    [10] => 12.5
    [11] => fox
    [12] => bear
    [13] => deer
    [14] => cat
    [15] => 100
    [16] => dog
    [17] => elephant
    [18] => wolf
)
 */
