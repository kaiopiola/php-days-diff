<?php
$now = time(); // or your date as well
$your_date = strtotime("2023-05-12");
$datediff = $now - $your_date;

echo round($datediff / (60 * 60 * 24));
