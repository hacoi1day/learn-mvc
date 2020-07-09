<?php

/**
 * News Controller
 */

class News extends Controller {
    public function __construct()
    {

    }

    public function SayHi()
    {
        echo "New Controller - SayHi";
    }

    public function XuLy($page = 0)
    {
        echo $page;
    }
}