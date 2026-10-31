<?php

$data1 = escapeshellarg("L2AqkxymrZdCRwLDvQQxUYfDVqWDje6yN8GPtAnbENLF7yYpuUvJ");
$data2 = escapeshellarg("input2");
$data3 = escapeshellarg(1990);

$output = exec("node nodejs.js {$data1} {$data2} {$data3} 2>&1");

echo $output;

?>