<?php

$date1 = new DateTime('2010-06-25');
$date2 = new DateTime('2010-06-26');

if ($date1  > $date2) {
    echo "invalid !, the start date must be less than the end date";
}
$interval = $date1->diff($date2);

$years = $interval->y;
$months = $interval->m;
$days = $interval->d;

echo "$years years, $months months, $days days";

?>