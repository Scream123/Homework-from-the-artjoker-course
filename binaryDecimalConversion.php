<?php
/**
 * Написать функцию которая по параметрам принимает число из десятичной
системы счисления и преобразовывает в двоичную. Написать функцию которая
выполняет преобразование наоборот.
*/
/**
 * @param $binaryNumber
 * @return false|float|int|string
 */
function binaryConversion($number)
{
    $binaryNumber = '';
    if (isset($number)) {
        while ($number != 0) {
            $binaryNumber = ($number % 2) . $binaryNumber;
            $number = (int)($number / 2);
        }
    } else {
        echo 'variable is not declared';
    }
    return $binaryNumber;
}
echo 'binary number = ' . binaryConversion(20) . '<br/>';

function decimalConversion($binaryNumber)
{
    $i = 0;
    if (preg_match('~^[01]+$~', $binaryNumber)) {
        while ($binaryNumber != "") {
            $i = $i * 2 + substr($binaryNumber, 0, 1);
            $binaryNumber = substr($binaryNumber, 1);
        }
    } else {
        echo "No entry found.";
        exit;
    }
    return $i;
}
echo 'decimal number = ' . decimalConversion(101010) . '<br/>';
