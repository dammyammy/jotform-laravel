<?php


namespace TedbreeDigital\JotForm\Traits;

trait DebugTools
{
    private function _debugLog($str)
    {
        if ($this->debugMode){
            print_r(PHP_EOL);
            print_r($str);
        }
    }

    private function _debugDump($obj)
    {
        if ($this->debugMode){
            print_r(PHP_EOL);
            var_dump($obj);
        }
    }
}