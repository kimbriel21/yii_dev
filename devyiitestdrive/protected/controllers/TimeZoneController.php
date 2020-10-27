<?php
/**
 * Created by PhpStorm.
 * User: Khemz
 * Date: 27/10/2020
 * Time: 11:32 AM
 */
class TimeZoneController extends Controller
{
    private $timeZoneService;

    function __construct()
    {
        Yii::import('application.services.*.*');
        $this->timeZoneService = new TimeZoneServiceImpl();
    }

    public function ActionIndex($location = null, $timezone = null){
//        $response = $this->timeZoneService->getLocationTimeStamp($location, $timezone);
//        $arr = array();
//        $arr["TimeZoneResponse"] = $response;
//        echo serialize($arr);
//        $this->renderPartial("timezone", $arr);
    }
}