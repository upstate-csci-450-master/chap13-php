<?php

/*
VIDEO: PHP Functions
View - https://www.patreon.com/posts/php-functions-20812110
Download - https://www.patreon.com/file?h=20812110&i=2520194
*/

const BR = '<br />';

echo multiply(5, 6);

function multiply($one, $two) {
    return $one * $two;
}

echo BR;

multiply_print(5, 10);

function multiply_print($one, $two) {
    echo $one * $two;
}

echo BR;

function print_info(array $info, $color = 'lightblue', $cellpadding = 10){
    
    //local scope
    $local = '$local: I live only inside the function!';
    global $global;
    $global = '$global: I\'m all over the place!';
    
    echo "<table bgcolor='$color' border='3'"
            . "bordercolor = 'black' cellpadding='$cellpadding' "
            . "cellspacing='0'>";

    foreach ($info as $key => $value){
        echo '<tr><td>'.ucwords($key).'</td><td>'.$value.'</td></tr>';
    }
    
       if ($info['age'] > 21) {
            echo '<tr><td>Alcohol</td><td>Red Wine</td></tr>';
            //3) Calling function from within a function 
            //(functions have global scope)
            echo '<tr><td>Random</td><td>'.multiply(rand(1,50),rand(1,50)).
                    '</td></tr>';
        }
    
    echo '</table>';
    
    echo $local;
}

$my_info = array('name' => 'Vladi', 'age' => 33, 'gender' => 'M', 'job' =>
    'Clever Techie');

print_info($my_info, 'lightgreen');

$func_name = 'print_info';

echo BR;

$func_name($my_info, 'pink');
echo BR;
echo $global;
//global scope

//recursive functions

function recursion($a){
    if ($a <= 10){
        echo "$a\n";
        recursion($a + 1);
    }
}
echo BR;
recursion(0);

//passing function parameters by reference

function add_some_extra(&$string) //allow function to modify it's arguments
{
    //add string to existing variable
    $string .= 'and something extra.';
}
echo BR;
$str = 'This is a string, ';
add_some_extra($str);
echo $str;    // outputs 'This is a string, and something extra.'
echo BR;