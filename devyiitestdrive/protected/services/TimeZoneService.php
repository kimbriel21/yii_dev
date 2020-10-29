<?php

/**
 * Created by PhpStorm.
 * User: Khemz
 * Date: 27/10/2020
 * Time: 11:24 AM
 */
interface TimeZoneService
{
    public function getLocationTimeStamp($location, $timestamp);
}