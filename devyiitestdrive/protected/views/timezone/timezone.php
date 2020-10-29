<?php
/**
 * Created by PhpStorm.
 * User: Khemz
 * Date: 27/10/2020
 * Time: 12:10 PM
 */
$renderPageTimeStamp = new DateTime();
echo CHtml::encode("ResponseTimeStamp = " . $timeZoneResponse["timeStamp"]) . "</br>";
echo CHtml::encode("PageLoadTimeStamp = " . $renderPageTimeStamp->getTimestamp()) . "</br>";
echo CHtml::encode("time difference = " . abs($timeZoneResponse["timeStamp"] - $renderPageTimeStamp->getTimestamp()));