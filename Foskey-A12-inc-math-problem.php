

<?php
function addition($number1,$number2)
{
    return $number1 + $number2;
}


function subtraction($number1,$number2)
{
    return $number1 - $number2;
}


function multiplication($number1,$number2)
{
    return $number1 * $number2;
}


function division($number1,$number2)
{
    if($number2 == 0) {
        return -1;
    } else {
    return $number1 / $number2;
    }
}
?>
