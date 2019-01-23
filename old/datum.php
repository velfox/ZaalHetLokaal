<?php

// $datumM = date("m");
// $datumY = date("y");
// $dagenMaand = cal_days_in_month(CAL_GREGORIAN,$datumM,2019);
// echo $dagenMaand;

// $tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
// $lastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
// $nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);

// $datum = date("m");

// $ndate = (strtotime("today"," +2 months"));
// $dagenMaand = cal_days_in_month(CAL_GREGORIAN,$ndatum,2019);
// echo $dagenMaand;

$mony = 12.4;
echo number_format($mony , 2, ',', ' ');
