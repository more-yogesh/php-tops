<?php

// 1. over writing 2. Over loading // partial support

class Job
{
    public function lastJob()
    {
        return 'Space X INC -Alon Musk';
    }

    public function  sum($arg1, $arg2)
    {
        return $arg1 + $arg2;
    }

    // public function sum(string $arg1, string $arg2){

    // }
}

class MyProfile extends Job
{



    public function lastJob()
    {
        return 'ISRO -Indian Government' . "<h1>" . $this->sum(50, 50) . "</h1>";
    }
    public function intro()
    {
        return $this->lastJob() . " Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni consequatur, velit magnam accusantium quis similique, libero quae fugit omnis nemo doloribus ratione tenetur excepturi dignissimos quia sapiente iusto. Nisi, vero?";
    }
}

$profile = new MyProfile;

echo $profile->intro();
