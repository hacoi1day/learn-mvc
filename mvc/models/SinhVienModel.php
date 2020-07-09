<?php

class SinhVienModel extends DB {
    public function GetSV()
    {
        // connect db
        return "Nguyễn Văn Tèo";
    }

    public function AddSV()
    {

    }

    public function Tong($n, $m)
    {
        return $n + $m;
    }

    public function SinhVien()
    {
        $qr = 'SELECT * FROM `student`';
        return mysqli_query($this->con, $qr);
    }



}