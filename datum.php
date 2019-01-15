<?php

$datumM = date("m");
$datumY = date("y");
$dagenMaand = cal_days_in_month(CAL_GREGORIAN,$datumM,2019);
echo $dagenMaand;



$datum = date("m");

$ndate = (strtotime("today"," +2 months"));
$dagenMaand = cal_days_in_month(CAL_GREGORIAN,$ndatum,2019);
echo $dagenMaand;