<?php



echo "bonjour";

function test_h_typing(bool $arg) : int {
    echo !$arg ? "false" : "true";
    echo $arg;
    return $arg;
}

echo "\n";

test_h_typing(false);
echo "\n";
test_h_typing(true);
echo "\n";
test_h_typing("hello");
echo "\n";
//////      pass by ref

function test_byRef(&$arg) {
    $arg *= 2; // multiply value passed by reference by 2
    $arg = 5; // set varbible passed by ref to 5
}

$value = 6;
echo $value."\n";
test_byRef($value);
echo $value."\n";

//////      declare tick


function tick_handler()
{
    echo "tick_handler() called\n";
}

register_tick_function('tick_handler');

declare(ticks = 1) {
    $a = 1;
    echo "hello\n";
    if(1){
        echo "if body here\n";
    }
}

echo 'hi';