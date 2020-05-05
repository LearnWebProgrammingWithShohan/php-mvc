<?php

include 'Student.php';
include 'User.php';

class Model {

    public function getStudentDetails() {

        return array(
            "Arup" => new Student( 'Arup', '22', '192001' ),
            "bijoy" => new Student( 'bijoy', '24', '123456' ),
        );
    }

    public function getStudent( $name ) {
        $allStudent = $this->getStudentDetails();
        return $allStudent[$name];
    }

    public function getUserDetails() {

        return array(
            "raihan" => new User( 'raihan', 'rahihan@gmail.com' ),
            "robi" => new User( 'robi', 'robi@gmail.com' ),
        );
    }

    public function getUser( $username ) {
        $allUser = $this->getUserDetails();
        return $allUser[$username];
    }
}

?>