<?php

include 'model/Model.php';

class Controller{


    public $model;

       public function __construct(){
           $this->model = new Model();
       }

       public function StudentShow(){
           if(!isset($_GET['student'])){
               $students = $this->model->getStudentDetails();
               include 'view/Studenlist.php';
           }else{
               $student = $this->model->getStudent($_GET['student']);
               include 'view/ViewStudent.php';
           }
       }
}



?>