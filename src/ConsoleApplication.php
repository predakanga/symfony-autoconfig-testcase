<?php


namespace Testcase;


use Symfony\Component\Console\Application;

class ConsoleApplication extends Application
{
    public function __construct()
    {
        parent::__construct("Testcase", "0.01");
    }

}