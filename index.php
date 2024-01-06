<?php
// strtotime function

// var_dump(strtotime(datetime: "7 months ago"));

// echo strtotime("today")
// echo  date(format: "y-m-d")
// echo date(format: 'H:i:s Y-M jS T');

// $date = '2024-1-03';
// $today = date('y-m-d');

// $diff = (strtotime($today) - strtotime($date));

// echo $diff/(60*60*24);

// scenario :
// we are requesting the application that we can use in our borrowed company
// we send money

$date = date("Y-m-d", strtotime("5 days ago"));
$today = date("Y-m-d");
$amount = 0;
$diff = (strtotime($today) - strtotime($date)) / (60 * 60 * 24);
if ($diff > 2) {
    $startcharg = $diff - 2;
    $amount += 100 * $startcharg;
}

echo "you charge now is " . $amount . "frw";
