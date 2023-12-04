<?php
    require('./student.php');
    $student=new Student;
    $student->writeToFile('Nguyễn Xuân Cảnh', 22, 'students.txt');
    $ReadStudent=$student->reatFile('students.txt');
    echo "<pre>";
    print_r($ReadStudent);
    echo"</pre>";
?>