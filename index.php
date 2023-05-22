<?php
//2023-05-12
$now = time(); // or your date as well
$your_date = strtotime($_REQUEST['date']);
$datediff = $now - $your_date;

echo round($datediff / (60 * 60 * 24));
