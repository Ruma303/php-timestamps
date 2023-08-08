<?php

//$ time()
/* $now = time();
echo $now; // 1691487384 */


//$ mktime(hour, minute, second, month, day, year)
/* $ts1 = mktime(7, 10, 32, 12, 31, 1997);
echo $ts1 . '<br>'; // 883552232
$ts2 = mktime(0, 0, 0, 12, 31, 1999);
echo $ts2 ; // 946598400 */


//$ strtotime(string, [timestamp])
/* $ts1 = strtotime("tomorrow");
echo $ts1 . '<br>'; // 1691539200
$ts2 = strtotime("+1 week 2 days 4 hours", $ts1);
echo $ts2; // 1692331200 */


//$ date(format, [timestamp])
/* $date1 = date("d/m/y");
echo $date1 . '<br>'; // 08/08/23
$date2 = date("Y-m-d H:i:s", 1691539200);
echo $date2; // 2023-08-09 00:00:00 */


//$ getdate([timestamp])
/* $ts = mktime(0, 0, 5, 4, 28, 2049);
echo '<pre>';
$date1 = getdate($ts);
print_r($date1);
echo '</pre>';

echo "Year: " . $date1['year'] . '<br>'; // 2049
echo "Month: " . $date1['mon'] . '<br>'; // 4
echo "Day: " . $date1['mday'] . '<br>'; // 28
echo "Hour: " . $date1['hours'] . '<br>'; // 0
echo "Minute: " . $date1['minutes'] . '<br>'; // 0
echo "Second: " . $date1['seconds'] . '<br>'; // 5

$date2 = getdate();
echo '<pre>';
print_r($date2);
echo '</pre><br>'; */



//$ date_create()
/* $date = date_create("2013-03-15");
echo date_format($date, "Y/m/d H:i:s"); */
// 2013/03/15 00:00:00
