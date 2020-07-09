<?php

/**
 * Home Controller
 */

class Home extends Controller {
    public function __construct()
    {

    }

    public function SayHi()
    {
        // call model
        $teo = $this->model('SinhVienModel');
        echo $teo->GetSV();

        // call view

    }

    public function Show($a, $b)
    {
        // Get Model
        $teo = $this->model('SinhVienModel');
        $tong = $teo->Tong($a, $b);
        // View
        $this->view('aodep', [
            'number' => $tong,
            'color' => 'red',
            'page' => 'news',
            'likes' => ['a', 'b', 'c'],
            'member' => 'B3',
            'students' => $teo->SinhVien()
        ]); // require aodep.php
    }
}