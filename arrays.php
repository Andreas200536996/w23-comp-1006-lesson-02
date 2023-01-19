<?php

$my_arr_constructor = array();

$my_arr_literal = [];

$my_arr_init_vals = ['a', 1, true, 5.6];

$mixed_arr = [
    "Andreas Sofijanov",
    true,
    19,
    30.62
];

//add something to the end of array
array_push($mixed_arr, "I like cats");
$mixed_arr[] = "I like dogs";

//add something to beginning of array
array_unshift($mixed_arr, false);

//remove something from end of array
array_pop($mixed_arr);

//remove something from beginning of array
array_shift($mixed_arr);

array_splice($mixed_arr, 3, 1);

//add nested item to array
$mixed_arr[] = [
    "hello",
    "world"
];

$mixed_arr[3] = 'I like hedgehogs';
?>