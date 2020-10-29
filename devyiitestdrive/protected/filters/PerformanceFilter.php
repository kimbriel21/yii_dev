<?php

/**
 * Created by PhpStorm.
 * User: Khemz
 * Date: 26/10/2020
 * Time: 4:01 PM
 */
class PerformanceFilter extends CFilter
{
    protected function preFilter($filterChain)
    {
        // logic being applied before the action is executed
        return true; // false if the action should not be executed
    }

    protected function postFilter($filterChain)
    {
        // logic being applied after the action is executed
    }
}