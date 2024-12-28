<?php 

declare (strict_types = 1);



function sum1 ($x, $y) {
    return $x + $y;
}
echo sum1(3, 5);

 
function sum2 (int $x, int $y) : int { // the funtion return and take int type data.
    return $x + $y;
}
echo sum2(3, 5);


 
function sum3 (int $x, int $y) : int|float { // the funtion return int and float type data and take only int type data.
    return $x + $y;
}
echo sum3(3, 5);


 
function sum4 (int | float $x, int | float $y) : int|float|string { // the funtion return int, float and string type data and take int or float type data.
    return $x + $y;
}
echo sum4(3, 5);




// void means the return will not provide any value [void is used for understanding that return will be null]
 
function sum5 (int | float $x, int | float $y) : void { // the funtion will not return any value but it can take int or float type data.
    $z = $x + $y;
    return ;
}
echo sum5(3, 5);




// mixed means to the all data types of php 

function sum6 (mixed $x, mixed $y) : mixed { // the funtion will return and take any type of value
    $z = $x + $y;
    return $z;
}
echo sum6(3, 5);
echo sum6(3.898, '5');



?>