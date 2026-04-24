<a href="day2.php">Day 2</a>
<br><br>
<a href="day3.php">Day 3</a>
<br><br>
<a href="day4.php">Day 4</a>
<?php

$age = 18;

if( $age >=18) {
    echo "You are an adult, go on!";
} else {
    echo "Sorry, Grow up first.";
}

for ( $i = 0; $i <=10; $i++) {
    echo $i . "<br>";
}

$name = ['Rashid', 'Ali', 'John'];
foreach ($name as $n) {
    echo $n . "<br>";
}
?>