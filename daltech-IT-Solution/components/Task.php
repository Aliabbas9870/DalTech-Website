<?php
$i=12;
// $a=1;
// echo($a);
for($i=1;$i<=4;$i++){
    
    echo("***");
    echo("<br>");
}
?>
<?php

$num_rows = 5;

// Outer loop to handle number of rows
for ($i = 1; $i <= $num_rows; $i++) {
    // Inner loop to handle number of columns and spaces
    for ($j = $num_rows; $j >= $i; $j--) {
        echo "&nbsp;&nbsp;"; // Print spaces
    }
    // Inner loop to handle number of columns and stars
    for ($k = 1; $k <= $i; $k++) {
        echo "*&nbsp;"; // Print stars
    }
    echo "<br>"; // New line after each row
}

?>


<?php

$num_rows = 5;

// Outer loop to handle number of rows
for ($i = 1; $i <= $num_rows; $i++) {
    // Inner loop to handle number of columns and stars
    for ($j = 1; $j <= $i; $j++) {
        echo "*&nbsp;"; // Print stars
    }
    echo "<br>"; // New line after each row
}

?>

<?php

// Number of rows for the star pattern
$rows = 5;

// Upper part of the star
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}

// Lower part of the star
for ($i = $rows - 1; $i >= 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo "* ";
    }
    echo "\n";
}

?>
<?php
$rows = 10;
$num1 = 0;
$num2 = 1;
echo "Fibonacci Series up to $rows terms:";
echo "<br/>";
echo $num1 . ", " . $num2 . ", ";
for ($i = 2; $i < $rows; $i++) {
    $num3 = $num1 + $num2;
    echo $num3 . ", ";
    $num1 = $num2;
    $num2 = $num3;
}
?>

<?php
$rows = 5;
for ($i = 0; $i < $rows; $i++) {
    $number = 1;
    for ($j = 0; $j <= $i; $j++) {
        echo $number . " ";
        $number = $number * ($i - $j) / ($j + 1);
    }
    echo "<br/>";
}
?>

<?php
$rows = 5;
$count = 1;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $count++ . " ";
    }
    echo "<br/>";
}
?>

<?php
$rows = 5;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$j ";
    }
    echo "<br/>";
}
?>

<?php
$rows = 5;
$cols = 10;
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        if ($i == 0 || $i == $rows - 1 || $j == 0 || $j == $cols - 1) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br/>";
}
?>
