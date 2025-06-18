<pre>
<?php
$x = [1, 2, 3];
$y = array(1,2,3);

print_r($x);
print_r($y);

$x[] = 10;
array_push($y,10);

print_r($x);
print_r($y);

unset($x[1]);
array_splice($y, 1, 1);

print_r($x);
print_r($y);

array_shift($x);
array_pop($y); 

print_r($x);
print_r($y);