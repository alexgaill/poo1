<?php

class App{
    public function load()
    {
        session_start();
        Autoloader::register();
    }
}