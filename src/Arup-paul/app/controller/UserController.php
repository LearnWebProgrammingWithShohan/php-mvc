<?php

include 'Controller.php';
class UserController extends Controller {

    public function UserShow() {
        if ( !isset( $_GET['user'] ) ) {
            $users = $this->model->getUserDetails();
            include 'userlist.php';
        } else {
            $user = $this->model->getUser( $_GET['user'] );
            include 'Viewuser.php';
        }
    }
}

?>