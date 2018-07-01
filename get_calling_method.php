<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 7/1/18
 * Time: 10:31 AM
 */
class ExampleClass {
    protected function getCallingMethod(){
        $exc = new Exception();
        $trace = $exc->getTrace();
        //position 0 would be the line that called this function so we ignore it
        //$last_call = $trace[1]; //uncomment this and comment next line if we want max info
        $last_call = 'Executed method: '.$trace[1]['class'].'->'.$trace[1]['function'];
        print_r($last_call, false);
    }
}