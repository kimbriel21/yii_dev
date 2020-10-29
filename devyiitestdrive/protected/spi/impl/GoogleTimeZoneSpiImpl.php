<?php

/**
 * Created by PhpStorm.
 * User: Khemz
 * Date: 27/10/2020
 * Time: 11:26 AM
 */
class GoogleTimeZoneSpiImpl implements TimeZoneSpi
{
    private static $GOOGLE_TIMEZONE_API = "https://maps.googleapis.com/maps/api/timezone/json";
    private static $KEY = "example key";
    private static $STUB_TIMEZONE_API = "http://localhost/index.php?r=stubs/StubTimeZone/TimeZone";

    public function getLocationTimeStamp($location, $timestamp)
    {
        $urlQueryParam = "?location=" . $location . "&timestamp=" . $timestamp . "&key=" . GoogleTimeZoneSpiImpl::$KEY;
        $response = Yii::app()->curl->get(GoogleTimeZoneSpiImpl::$STUB_TIMEZONE_API);
        $response = $this->addResponseTimeStamp(CJSON::decode($response));
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function addResponseTimeStamp($response)
    {
        $date = new DateTime();
        $response["timeStamp"] = $date->getTimestamp();
        return $response;
    }
}