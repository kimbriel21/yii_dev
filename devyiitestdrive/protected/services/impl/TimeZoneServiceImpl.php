<?php
/**
 * Created by PhpStorm.
 * User: Khemz
 * Date: 27/10/2020
 * Time: 11:28 AM
 */
class TimeZoneServiceImpl implements TimeZoneService
{
    private $timeZoneSpi;

    function __construct()
    {
        $this->timeZoneSpi = new GoogleTimeZoneSpiImpl();
    }

    public function getLocationTimeStamp($location, $timestamp)
    {
        $response = $this->timeZoneSpi->getLocationTimeStamp($location, $timestamp);
        //added logic will be codded here
        return $response;
    }
}