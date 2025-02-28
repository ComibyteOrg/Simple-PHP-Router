<?php 
    $title = "Login";
    include("includes/header.php");
    require("controller/SignupController.php");

    if(count($_POST) > 0){
        $Users = new SignupController();
        $alerts = $Users->user($_POST);
    }
?>
   
<!--    Linking external css styling -->
    <link rel="stylesheet" href="resources/static/styles/forms.css">
<!-- End Linking External styles -->

<!-- Login Container -->
    <div class="container h-100 formContainer">
        <form method="post">
            <h1>Signup</h1> 
            <?php require_once "controller/Alert.php"?>
            <div class="form-floating my-3">
                <input type="text" class="form-control" id="floatingInputValue2" placeholder="Full Name" name="fname">
                <label for="floatingInputValue2">Full Name</label>
            </div>
            
            <div class="form-floating my-3">
                <input type="text" class="form-control" id="floatingInputValue3" placeholder="Department" name="dept">
                <label for="floatingInputValue3">Department</label>
            </div>
            
            <div class="form-floating my-3">
                <input type="text" class="form-control" id="floatingInputValue4" placeholder="Center" name="center">
                <label for="floatingInputValue4">Center</label>
            </div>

            <div class="form-floating my-3">
                <input type="text" class="form-control" id="floatingInputValue" placeholder="Username" name="username">
                <label for="floatingInputValue">Username</label>
            </div>

            <div class="form-floating my-3">
                <input type="tel" class="form-control" id="floatingInputValue1" name="regnumber" placeholder="Matric Number">
                <label for="floatingInputValue1">Matric Number</label>
            </div>

            <div class="form-floating my-1">
                <p>Already Had An accout ? <a href="/login" class="text-purple">Login</a></p>
            </div>

            <div class="form-floating mt-1">
                <button type="submit" name="signup" class="btn btn-purple w-100">Signup</button>
            </div>

        </form>
    </div>
<!-- End Login Container -->

<?php 
    include("includes/footer.php");
?>