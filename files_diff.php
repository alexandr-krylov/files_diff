<?php
$source_file1 = $argv[1];
$source_file2 = $argv[2];
$result_file1 = $argv[3];
$result_file2 = $argv[4];

$source1 = file($source_file1);
$source2 = file($source_file2);
file_put_contents($result_file1, array_diff($source1, $source2));
file_put_contents($result_file2, array_diff($source2, $source1));
