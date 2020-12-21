<?php
/*
1. Encapsulation :
Wrapping data member and member function into single unit is known as Encapsulation
class{

}

constructor
    special function, first execute constructor before any function.

2.Inheritance
    parent child property execution
    1. Multiple = X
    2. Multi Level = v
    


*/

class School
{
    public $schoolName = "Oxford School of Super Student I.T.U.S.";
    public $schoolAddress = "401, Shanti Nagar, South USA, America";

    public function completeSchoolAddress()
    {
        return "<h1>School Name: $this->schoolName, $this->schoolAddress</h1>";
    }
}
class Student extends School
{
    public $name;
    public $dob;

    public function __construct($studentName, $studentDOB)
    {
        $this->name  = $studentName;
        $this->dob = $studentDOB;
    }

    public function findBirthDay()
    {
        return "Hello World";
    }

    public function studentInfo()
    {
        return "School Name: $this->schoolName Name of The student is $this->name age of the student is $this->dob and school Address is  " . $this->completeSchoolAddress();
    }

    public function age()
    {
        return date('Y') - (explode("-", $this->dob)[0]);
    }
    public static function studentEnrollmentNo()
    {
        return rand();
    }
}

class Admission extends Student
{
}

// echo Student::studentEnrollmentNo();

$std = new Student('yogesh', '1992-10-10');

// echo $std->findBirthDay();

echo $std->studentInfo();


// echo $std->age();

// $db = new MySQLi('','','','');
//$db->query("");
