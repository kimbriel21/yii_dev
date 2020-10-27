<?php

/**
 * Created by PhpStorm.
 * User: Khemz
 * Date: 26/10/2020
 * Time: 3:44 PM
 */
class PostController extends CController
{
    public function filters()
    {
        return array(
            'postOnly + edit',
            'getOnly + view',
            array(
                'application.filters.PerformanceFilter - edit, view',
            ),
        );
    }

    public function actionCreate($category, $language='en')
    {
        $category=(int)$category;

        echo $category . "-" . $language;
    }

    public function actionView()
    {
        $output = Yii::app()->curl->get("https://jsonplaceholder.typicode.com/todos/1");
        $output2 = CJSON::decode($output);
        if (date_default_timezone_get()) {
            echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
        }

        if (ini_get('date.timezone')) {
            echo 'date.timezone: ' . ini_get('date.timezone') . '<br />';
        }

        echo $output;
//        $arr = array();
//        $arr["category"] = $category;
//
//        $this->render("custom", $arr);
    }

    public function actionDbCreate(){
//        $connection=new CDbConnection("mysql:host=localhost;dbname=testdb","root","");
//        $this->DAOquery();


        $user = Yii::app()->db->createCommand()
            ->select('m.id, m.name, m.number')
            ->from('member m')
            ->queryAll();

        echo serialize($user);
    }

    public function DAOquery()
    {
        $sql = "select * from member";
        $connection = Yii::app()->db;
        $command = $connection->createCommand($sql);
        $dataReader = $command->queryAll();
        foreach ($dataReader as $row) {
            echo serialize($row);
        }
    }
}