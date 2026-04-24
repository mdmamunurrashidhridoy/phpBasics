<?php

// Task 1
$number = 12;
if ($number > 0) {
    echo "$number is Positive";
} else if ($number < 0) {
    echo "$number is Negative";
} else {
    echo "This is invented by Aryabatta";
}

//Task 2
for ($i = 1; $i < 21; $i++) {
    echo $i . "<br>";    
}

//Task 3
for ($i = 1; $i < 21; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}

//Task 4
$fruits = ["Apple", "Banana", "Mango"];
foreach($fruits as $fruit){
    echo $fruit . "<br>";
}

//Task 5
$number5 = 12;
if ($number5 % 2 == 0) {
    echo $number . "is Even";
} else {
    echo $number . "is Odd";
}
?>