<?php

namespace MVC;
echo 'request<br>';
class Request
{
    public $url;
    public function __construct()
    {
        $this->url = $_SERVER["REQUEST_URI"];
    }
}
