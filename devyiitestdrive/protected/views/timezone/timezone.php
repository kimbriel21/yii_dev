<?php
/**
 * Created by PhpStorm.
 * User: Khemz
 * Date: 27/10/2020
 * Time: 12:10 PM
 */
$this->pageTitle=Yii::app()->name;
$renderPageTimeStamp = new DateTime();
?>

<?php echo CHtml::encode("ResponseTimeStamp = " . $timeZoneResponse["timeStamp"] ) . "</br>"; ?>
<?php echo CHtml::encode("PageLoadTimeStamp = " . $renderPageTimeStamp->getTimestamp() ) . "</br>"; ?>
<?php echo CHtml::encode("time difference = " . abs($timeZoneResponse["timeStamp"] - $renderPageTimeStamp->getTimestamp())); ?>

