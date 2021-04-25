<pre>
<?=var_dump($_SERVER);?>
<?=var_dump($_SERVER["REQUEST_URI"]);?>
<?=var_dump(__CLASS__);?>

<?php

$start = microtime(true);

// # autoloader 01
spl_autoload_register(function($class) {
    require_once "model/${class}.class.php";
});

# autoloader 02

class Foo {

    function poo() {
        var_dump(__CLASS__);
    }

}

for($i = 0; $i < 1000000; ++$i) {

}

$test = new Foo();
$test->poo();
var_dump(array("hi", "hello"));

$test2 = new Poo();

$end = microtime(true);

echo $end - $start;

?>

<?php exit;?>
</pre>
