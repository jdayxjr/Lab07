<?php
/**
 * Name: Jay Dawson II
 * Date:2/14/2023
 * File:grad_student.class.php
 * Description:
 */

class GradStudent extends Student
{
    // a students program
    private $program;
    //static data member to count the number of students
    private static $student_count = 0;

    public function __construct($name, $gender, $major, $gpa, $program)
    {
        parent::__construct($name, $gender, $major, $gpa);
        $this->program = $program;
        self::$student_count++;
    }

    /**
     * @return mixed
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * @param mixed $program
     * @return GradStudent
     */
    public function setProgram($program)
    {
        $this->program = $program;
        return $this;
    }

    public static function getStudentCount()
    {
        return self::$student_count;
    }


// End of class

//display the string representation of the object
    public function toString()
    {
        parent::toString();
        echo "Program: ", $this->getProgram();
    }
}