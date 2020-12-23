<?php


class University
{
    public function campus()
    {
        return "124 YARD CAMPUS";
    }
    public function wifi()
    {
        return "Oxford WIFI";
    }
    public function library()
    {
        return "OXFORD UNIVERSAL LIBRARY";
    }

    private function wifiPassword()
    {
        return "DSD646464sFD4FD";
    }
    public function student()
    {
        return $this->library() . $this->wifiPassword();
    }

    protected function conventionHall()
    {
        return 'BADHIYA WALA HALL';
    }
}
class MyChunnilalCollege extends University
{
    public function collegeHall()
    {
        return $this->conventionHall();
    }
}

$uni = new University;

// echo $uni->wifiPassword();

// echo $uni->conventionHall();

$college = new MyChunnilalCollege;

echo $college->collegeHall();
