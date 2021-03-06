--TEST--
Test stripos() function : error conditions 
--FILE--
<?php
/* Prototype  : int stripos ( string $haystack, string $needle [, int $offset] );
 * Description: Find position of first occurrence of a case-insensitive string
 * Source code: ext/standard/string.c
*/

echo "*** Testing stripos() function: error conditions ***\n";
echo "\n-- With Zero arguments --";
var_dump( stripos() );

echo "\n-- With less than expected number of arguments --";
var_dump( stripos("String") );

echo "\n-- With more than expected number of arguments --";
var_dump( stripos("string", "String", 1, 'extra_arg') );

echo "\n-- Offset beyond the end of the string --";
var_dump( stripos("Hello World", "o", 12) );

echo "\n-- Offset before the start of the string --";
var_dump( stripos("Hello World", "o", -12) );

echo "*** Done ***";
?>
--EXPECTF--
*** Testing stripos() function: error conditions ***

-- With Zero arguments --
Warning: stripos() expects at least 2 parameters, 0 given in %s on line %d
NULL

-- With less than expected number of arguments --
Warning: stripos() expects at least 2 parameters, 1 given in %s on line %d
NULL

-- With more than expected number of arguments --
Warning: stripos() expects at most 3 parameters, 4 given in %s on line %d
NULL

-- Offset beyond the end of the string --
Warning: stripos(): Offset not contained in string in %s on line %d
bool(false)

-- Offset before the start of the string --
Warning: stripos(): Offset not contained in string in %s on line %d
bool(false)
*** Done ***
