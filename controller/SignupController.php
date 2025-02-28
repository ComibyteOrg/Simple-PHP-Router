<?php 
    use Config\Query\Query;
    use Controller\Controller;

    require ("config/Query.php");
    require ("controller/Controller.php");

    class SignupController extends Query{
        public $alerts = [];
        public function user($POST){
            $fullName = Controller::sanitize($POST['fname']);
            $dept = Controller::sanitize($POST['dept']);
            $center = Controller::sanitize($POST['center']);
            $username = Controller::sanitize($POST['username']);
            $regnumber = Controller::sanitize($POST['regnumber']);

            if(empty($fullName) || empty($center) || empty($username) || empty($regnumber)){
                $this->alerts = Controller::set_alert("danger", "<br>Warning : </b> All Fields Must not be empty");
            }

            if( empty($dept)  || strlen($dept) < 6){
                $this->alerts = Controller::set_alert("danger","<b> Warning :</b> Invalid Reg Number");
            }

            return $this->alerts;
        }
    }