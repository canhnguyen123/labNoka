<?php
    class Student{
        public function writeToFile($name,$age,$filePath){
            $data = "$name | $age;\n";
            file_put_contents($filePath, $data, FILE_APPEND);
        }
        public function reatFile($filePath){
            $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            $students = [];
            foreach ($lines as $line) {
                list($name, $age) = explode(' | ', $line);
                $students[] = ['Tên' => $name, 'tuổi' => $age];
            }

            return $students;
        }
    }
    class StudentLab5{
        private $name;
        private $age;
        private $math;
        private $physics;
        private $chemistry;
        private $avg;
    
        public function __construct($name, $age, $math, $physics, $chemistry)
        {
            $this->name = $name;
            $this->age = $age;
            $this->math = $math;
            $this->physics = $physics;
            $this->chemistry = $chemistry;
            $this->calculateAvg();
        }
    
        public function getName()
        {
            return $this->name;
        }
    
        public function setName($name)
        {
            $this->name = $name;
        }
    
        public function getAge()
        {
            return $this->age;
        }
    
        public function setAge($age)
        {
            $this->age = $age;
        }
    
        public function getMath()
        {
            return $this->math;
        }
    
        public function setMath($math)
        {
            $this->math = $math;
            $this->calculateAvg();
        }
    
        public function getPhysics()
        {
            return $this->physics;
        }
    
        public function setPhysics($physics)
        {
            $this->physics = $physics;
            $this->calculateAvg();
        }
    
        public function getChemistry()
        {
            return $this->chemistry;
        }
    
        public function setChemistry($chemistry)
        {
            $this->chemistry = $chemistry;
            $this->calculateAvg();
        }
    
        public function getAvg()
        {
            return $this->avg;
        }
    
        private function calculateAvg()
        {
            $this->avg = ($this->math + $this->physics + $this->chemistry) / 3;
        }
    }
    
class StudentService
{
    private $students;

    public function __construct(array $students)
    {
        $this->students = $students;
    }

    public function count()
    {
        $count = 0;
        foreach ($this->students as $student) {
            if ($student->getAvg() > 7) {
                $count++;
            }
        }
        return $count;
    }

    public function sort()
    {
        usort($this->students, function ($a, $b) {
            return $b->getAvg() <=> $a->getAvg();
        });
        return $this->students;
    }
}

?>