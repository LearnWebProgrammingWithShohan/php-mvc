<?php

include 'Controller.php';
class StudentController extends Controller {

    public function StudentShow() {
        if ( !isset( $_GET['student'] ) ) {
            $students = $this->model->getStudentDetails();
            include 'Studentlist.php';
        } else {
            $student = $this->model->getStudent( $_GET['student'] );
            include 'ViewStudent.php';
        }
    }
}

?>