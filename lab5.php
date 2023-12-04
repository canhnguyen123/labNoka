<?php
    require('./student.php');
    $student=new StudentLab5('Xuân Cảnh', 22, 8, 9, 7);
    echo "Tên : ".$student->getName()."<br/>";
    echo "Tuổi : ".$student->getAge()."<br/>";
    echo "Điểm toán : ".$student->getMath()."<br/>";
    echo "Điểm hóa : ".$student->getChemistry()."<br/>";
    echo "Điểm lý : ".$student->getPhysics()."<br/>";
    echo "Trung bình cộng : " .$student->getAvg()."<br/>";
    echo "<Hr/>";
    $students = [
        new StudentLab5('Xuân Cảnh', 22, 8, 9, 7),
        new StudentLab5('Xuân Cảnh b', 21, 0, 9, 4),
    ];
    
    $studentService = new StudentService($students);
    
    echo "Số học sinh có điểm trung bình > 7 là : " . $studentService->count() . "<br>";
    
    $sortedStudents = $studentService->sort();
    echo "Danh sách học sinh được sắp xếp theo điểm trung bình giảm dần:<br>";
    foreach ($sortedStudents as $student) {
        echo $student->getName() . " - Điểm trung bình: " . $student->getAvg() . "<br>";
    }
?>