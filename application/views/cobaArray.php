<?php

ini_set('memory_limit', '1024M');

$key = str_repeat('x', 1024 * 1024 * 128);

$foo = array($key => $key);

echo strlen(key($foo)) . "<br>";
echo strlen($foo[$key]) . "<br>";

?>
