<?php
/**
 * Name: Jay Dawson II
 * Date:2/14/2023
 * File:undergrad_student.class.php
 * Description:
 */

class UnderGradStudent extends Student{
    //a student's status such as freshman, sophomore, junior, senior
    private $status;
    private static $student_count = 0;
    public function __construct($name, $gender, $major, $gpa, $status) {
        parent::__construct($name, $gender, $major, $gpa);
        $this->status = $status;
        self::$student_count++;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return UnderGradStudent
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public static function getStudentCount() {
        return self::$student_count;
    }

    //display the string representation of the object
    public function toString() {
        parent::toString();
        echo "Status: ", $this->getStatus();
    }
}

