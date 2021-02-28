<?php namespace Project\Controllers;

class Initialize extends Controller
{
    public function main(String $params = NULL)
    {
        Masterpage::headPage('Sections/head')
                  ->bodyPage('Sections/body')
                  ->browserIcon('favicon.ico');
    }
}