<?php

/**
 * Created by PhpStorm.
 * User: Khemz
 * Date: 27/10/2020
 * Time: 11:42 AM
 */
class StubTimeZoneController extends Controller
{
    public function actionTimeZone(){
        $this->layout=false;
        header('Content-type: application/json');
        $arr = array();
        $arr["dstOffset"] = 0;
        $arr["rawOffset"] = -28800;
        $arr["status"] = "ok";
        $arr["timeZoneId"] = "America/Los_Angeles";
        $arr["timeZoneName"] = "Pacific Standard Time";
        echo CJavaScript::jsonEncode($arr);
        Yii::app()->end();
    }
}