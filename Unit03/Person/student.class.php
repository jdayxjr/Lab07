<?php
/*
 * Author: your name
 * Date: today's date
 * Name: student.class.php
 * Description: The Student models a student. The class inherits from the Person class.
 */
class Student extends Person {

    //private data members for a student's major and gpa
    private $major, $gpa;
    //static data member to count the number of students
    private static $student_count = 0;

    //constructor
    public function __construct($name, $gender, $major, $gpa) {
        parent::__construct($name, $gender);
        $this->major= $major;
        $this->gpa = $gpa;
        self::$student_count++;
    }

	//public get methods
    public function getMajor() {
        return $this->major;
    }

    public function getGPA() {
        return $this->gpa;
    }

	//public set methods
    public function setMajor($major) {
        $this->major = $major;
    }

    public function setGPA($gpa) {
        $this->gpa = $gpa;
    }

    //retrieve the number of students
    public static function getStudentCount() {
        return self::$student_count;
    }
} //end of class
?>
