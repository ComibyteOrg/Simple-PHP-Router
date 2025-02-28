<?php 
    $title = "Login";
    include("includes/header.php");
?>

<!--    Linking external css styling -->
    <link rel="stylesheet" href="<?=$baseurl?>static/styles/forms.css">
<!-- End Linking External styles -->

<!-- Login Container -->
    <div class="container h-100 formContainer">
        <form method="post">
            <h1>Login</h1> 
            <div class="form-floating my-3">
                <input type="text" class="form-control" id="floatingInputValue" placeholder="Username" name="username">
                <label for="floatingInputValue">Username</label>
            </div>

            <div class="form-floating my-3">
                <input type="tel" class="form-control" id="floatingInputValue1" name="regnumber" placeholder="Matric Number">
                <label for="floatingInputValue1">Matric Number</label>
            </div>

            <div class="form-floating my-1">
                <p>Dont Have An accout ? <a href="/signup" class="text-purple">Signup</a></p>
            </div>

            <div class="form-floating mt-1">
                <button type="submit" name="login" class="btn btn-purple w-100">Login</button>
            </div>

        </form>
    </div>
<!-- End Login Container -->

<?php 
    include("includes/footer.php");
?>