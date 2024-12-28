<?php 

declare (strict_types = 1);



function sum1 ($x, $y) {
    return $x + $y;
}
// echo sum1(3, 5);

 
function sum2 (int $x, int $y) : int { // the funtion return and take int type data.
    return $x + $y;
}
// echo sum2(3, 5);


 
function sum3 (int $x, int $y) : int|float { // the funtion return int and float type data and take only int type data.
    return $x + $y;
}
// echo sum3(3, 5);


 
function sum4 (int | float $x, int | float $y) : int|float|string { // the funtion return int, float and string type data and take int or float type data.
    return $x + $y;
}
// echo sum4(3, 5);




// void means the return will not provide any value [void is used for understanding that return will be null]
 
function sum5 (int | float $x, int | float $y) : void { // the funtion will not return any value but it can take int or float type data.
    $z = $x + $y;
    return ;
}
// echo sum5(3, 5);




// mixed means to the all data types of php 

function sum6 (mixed $x, mixed $y) : mixed { // the funtion will return and take any type of value
    $z = $x + $y;
    return $z;
}
// echo sum6(3, 5);
// echo sum6(3.898, '5');





// nullable means null value

function my_name1 ( string|null $name) :string|null {
    return $name;
}
$naming1 = 'Jual Rana';
// echo my_name("Jual Rana"); // Jual Rana
// echo my_name1($naming1); // if was not used ? or |null return will eat error.....

// or 

function my_name2 ( ?string $name) :?string { // short form null is ? sign
    return $name;
}
$naming2 = null;
// echo my_name2("Jual Rana"); // Jual Rana
// echo my_name2($naming2); // if was not used ? or |null return will eat error.....










// variable call by value and call by reference

// function new_func ($me) { // $me er value tai shodo matro function er viter jacche, tai change hocche na
//     $me = "Rana";
//     echo $me;
// }
// $me = "Jual"; // 
// echo "$me"; // Jual
// new_func($me); // Rana

// $me er memory location shoho function e patale ta change hobe [ & used ]

function new_func (string & $name) :void { // $me er value tai shodo matro function er viter jacche, tai change hocche na
    $name = "Rana";
    echo $name;
}
$me = "Jual"; // 
new_func($me); // Rana
echo "$me"; // Jual will be change to Rana by function's inner value

// #53 to ...
?>