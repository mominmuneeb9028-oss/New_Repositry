<?php
$students = array(
    array("Name" => "Ali","Age" => 20,"Grade" =>"A"),
    array("Name" => "Ram","Age" => 18,"Grade" =>"B"),
    array("Name" => "Sam","Age" => 22,"Grade" =>"C"),
);

echo "Student Detail <br>";
foreach($students as $student)
{
    echo "Name: ". $student["Name"]. "<br>";
    echo "Age: ". $student["Age"]. "<br>";
    echo "Grade: ". $student["Grade"]. "<br>";
}
?>