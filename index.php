<?php

// $people = '
// {
// "name": {
//     "age": 20,
//     "address" : "gisenyi"
// }
// }';

// $json = json_decode($people,associative: true);

// print_r($json);


$arr = [
   [ "name"=> "Bahati",
    "age"=>20,
    "address"=> "gisenyi"],
   [ "name"=> "James",
    "age"=>20,
    "address"=> "Rubavu"],
   [ "name"=> "Gisa",
    "age"=>20,
    "address"=> "Nyanza"],
];

$json = json_encode($arr);
echo $json;
