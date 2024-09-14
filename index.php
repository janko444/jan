<?php
$file = 'visit_count.txt';
if (file_exists($file)) {
    $visits = (int)file_get_contents($file);
    $visits++;
    file_put_contents($file, $visits);
} else {
    file_put_contents($file, 1);
}
?>
