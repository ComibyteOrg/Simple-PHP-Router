<?php 
    namespace Controller;
    session_start();
    class Controller{

        // Sanitize Inputs 
        public static function sanitize($input){
            $input = trim($input);
            $input = htmlspecialchars($input);
            $input = stripcslashes($input);
            $input = htmlentities(strip_tags($input));

            return $input;
        }

        // Redirect Users
        public static function redirect($page, $seconds){
            return 
            "
                <script>
                    setInterval(() => {
                        window.location.href = '$page'
                    }, $seconds);
                </script>
            ";
        }

        // show alerts 
        public static function set_alert($type, $message){
            return $alerts = 
            "
                <div class='alert alert-$type alert-dismissible fade show' role='alert'>
                    $message
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            ";
        }

}