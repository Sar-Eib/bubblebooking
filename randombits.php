<?php
$washstatus = $db->sql = "SELECT washTimeStatusId FROM washtimes";
if ($washstatus == '2')
    $colorClass = 'booked';
else
    $colorClass = 'open';

?>