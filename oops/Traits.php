<?php

trait School
{
    public function schoolName()
    {
        return 'Oxford Vidya Bharti';
    }
}

trait College
{
    public function collegeName()
    {
        return 'Harward University';
    }
}

trait Job
{
    public function companyName()
    {
        return 'ISRO';
    }
}

class Student
{
    use School, College, Job;
}


$student = new Student();

echo $student->schoolName();

echo $student->companyName();
