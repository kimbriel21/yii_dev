<?php
/**
 * Created by PhpStorm.
 * User: Khemz
 * Date: 27/10/2020
 * Time: 12:10 PM
 */
$renderPageTimeStamp = new DateTime();
echo "ResponseTimeStamp = " . $timeZoneResponse["timeStamp"] . "</br>";
echo "PageLoadTimeStamp = " . $renderPageTimeStamp->getTimestamp() . "</br>";
echo "time difference = " . abs($timeZoneResponse["timeStamp"] - $renderPageTimeStamp->getTimestamp());