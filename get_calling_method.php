<?php
/**
 * getCallingMethod() - this is useful for debug function, which (as clear from it's name) shows (or returns) method,
 * from which it was called. For example, if we want to see was specific method executed or not.
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

    public function generalClassMethod() {
        echo 'Now executing generalClassMethod()...'.PHP_EOL;
        $this->getCallingMethod();
    }
}
$exampleObj = new ExampleClass();
$exampleObj->generalClassMethod();

/**
 * Output will be:
 * Now executing generalClassMethod()...
 * Executed method: ExampleClass->generalClassMethod
 */