<?php

include 'Student.php';

class Model{

    public function getStudentDetails(){

        return array(
            "Arup"=> new Student ('Arup','22','192001'),
            "bijoy"=> new Student ('bijoy','24','123456'),
        );
    }

    public function getStudent($name){
        $allStudent = $this->getStudentDetails();
        return $allStudent[$name];
    }
}




?>