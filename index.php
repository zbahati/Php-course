<?php

// Project1
// Problem statement

/*
- we have list of poople information with name and age
1. we want to count the number of adult (+18 year old ) and children
2. we want to make a list of people between 22 to 30 year old , who can apply for our job opportunity

- Let say , a school asked us to create4 application where they want to categorize their student marks according to the marks they have
- we want to count the number of student with the marks form (+85 point) and those below
- we want to know the person class they are in, and how many in each of the class
 */

$people = [
    ["name" => "Bahati", "age" => 22],
    ["name" => "Person1", "age" => 25],
    ["name" => "Person2", "age" => 30],
    ["name" => "Person3", "age" => 28],
    ["name" => "Person4", "age" => 35],
    ["name" => "Person5", "age" => 40],
    ["name" => "Person6", "age" => 22],
    ["name" => "Person7", "age" => 45],
    ["name" => "Person8", "age" => 32],
    ["name" => "Person9", "age" => 28],
    ["name" => "Person10", "age" => 50],
    ["name" => "Person11", "age" => 23],
    ["name" => "Person12", "age" => 14],
    ["name" => "Person13", "age" => 29],
    ["name" => "Person14", "age" => 31],
    ["name" => "Person15", "age" => 27],
    ["name" => "Person16", "age" => 2],
    ["name" => "Person17", "age" => 55],
    ["name" => "Person18", "age" => 26],
    ["name" => "Person19", "age" => 38],
    ["name" => "Person20", "age" => 42],
];

$countAdult = 0;
$countChilds = 0;
$countPeopleToApply = [];
$allowed = 0;
foreach ($people as $person) {
    $age = $person["age"];

    if ($age >= 18) {
        $countAdult++;
        if ($age >= 22 && $age <= 30) {
            $countPeopleToApply[] = $person;
            $allowed++;
        }
    } else {
        $countChilds++;
    }
}

echo $countAdult . "<br/>";
echo $countChilds . "<br/>";
echo "Allowed to appy for the job opportunities = $allowed" . "<br/>";
print_r($countPeopleToApply);
