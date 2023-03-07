<?php
/*
 * Author: your name
 * Date: today's date
 * Name: test_person.phpp
 * Description: this client program tests the Person and Student classes.
 */
//convert a camel cased string to a underscored string
function camelCaseToUnderscore($str) {
    //store all characters in an array
    $characters = str_split($str);

    //covert the first character to a lowercase
    $characters[0] = strtolower($characters[0]);

    //exam all characters in the array
    //if a character is uppercase, replace it with a lowercase and prefix it with an underscore
    foreach ($characters as &$character) {
        if (ord($character) >= ord('A') && ord($character) <= ord('Z'))
            $character = '_' . strtolower($character);
    }

    //convert all elements in the array into a string and return the string
    return implode('', $characters);
}

spl_autoload_register(function($class_name){
    require_once camelCaseToUnderscore($class_name) . '.class.php';
});
/*
$g = new GradStudent("Kevin", "Male");

$g->setMajor("Informatics");
$g->setGPA(3.6);
 $g->setProgram("MS");

echo "<h3>Graduate Student</h3>";
echo "Name: ", $g->getName(), "<br>";
echo "Gender: ", $g->getGender(), "<br>";
echo "Major: ", $g->getMajor(), "<br>";
printf ("GPA: %.1f<br>", $g->getGPA());
echo "Program: ", $g->getProgram(); */
/*
$s = new UndergradStudent("Judy", "Female");

$s ->setMajor("Informatics");
$s->setGPA(3.8);
$s->setStatus("Junior");

echo "<h3>Undergraduate Student</h3>";
echo "Name: ", $s->getName(), "<br>";
echo "Gender: ", $s->getGender(), "<br>";
echo "Major: ", $s->getMajor(), "<br>";
printf ("GPA: %.1f<br>", $s->getGPA());
echo "Status: ", $s->getStatus();
*/


//create an UndergradStudent object and display its string representation
$u = new UndergradStudent
("Judy","Female","Informatics",3.8,"Junior");
echo "<h3>Undergraduate Student</h3>";
$u->toString();
echo "<br />There are " . UndergradStudent::getStudentCount() .
    " undergraduate students now.";
//create a GradStudent object and display its string representation
$g = new GradStudent("Kevin","Male","Informatics", 3.8, "Master");
echo "<h3>Graduate Student</h3>";
$g->toString();
echo "<br />There are " . GradStudent::getStudentCount() . " graduate students now.";



//display the number of students.
echo "<h3>" . Student::getStudentCount() . " students have  
      been created.</h3>";


?>

<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <meta name="author" content="Admin" />

        <title>The Person class and its subclasses</title>
    </head>

    <body>

        <?php
        //add your code here
        //create two GradStudent and two Undergrad objects
        $g1 = new GradStudent ("Bryan Young", "Male", "Informatics", 3.7, "Master");
        $g2 = new GradStudent ("Mellisa Rogers", "Female", "Engineering", 3.2, "Ph.D.");
        $u1= new UndergradStudent("Ian Watson", "Male", "Library Science", 3.0, "Freshman");
        $u2 = new UndergradStudent ("Kimberlee Wang", "Female", "Nursing", 2.8, "Junior");
        $m1 = new MedicalStudent("Timothy Lindsey", "Male", "Family Medicine", 3.4, "MD", 11.0);
        $m2 = new MedicalStudent("Amy Ling", "Female", "Anesthesiology", 3.8, "MD", 10.8);

        $students = array($g1, $g2, $u1, $u2, $m1, $m2);


        foreach ($students as $student){
            printStudent($student);
        }

        //a function to display student details
        function PrintStudent(Student $student){

            if(get_class($student) =="GradStudent"){
                echo "<h3>Graduate Students</h3>";

            } elseif (get_class($student) =="UndergradStudent"){
                echo"<h3>Undergraduate Students</h3>";
            } else if (get_class($student) == "MedicalStudent") {
                echo "<h3>Medical Student</h3>";
            }

            $student->toString();
        }

        echo "<h3>" . MedicalStudent::getStudentCount() . " medical students have been
created.</h3>";

        ?>

    </body>
</html>