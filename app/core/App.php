<?php

class App
{
    //Method Construct Testing
    public function __construct()
    {
        $url = $this->parseUrl();
        var_dump($url);
    }

    // Parsing URL
    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}