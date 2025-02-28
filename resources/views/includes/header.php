<!DOCTYPE html>
<html lang="en">
<?php 
    $baseurl = "/resources/";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Oluwadimu Adedeji">
    <meta name="description" content="Track your academic progress, with the JPTS Result portal. Check how good your results are ">
    <link rel="shortcut icon" href="<?=$baseurl?>static/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=$baseurl?>bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$baseurl?>static/styles/style.css">
    <?php if (isset($title)): ?>
        <title>JPTS RESULT | <?php echo strtoupper($title) ?></title>
    <?php else: ?>
        <title>JPTS RESULT PORTAL</title>
    <?php endif; ?>
</head>
<body>

    <!-- NAVBAR SECTION -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="<?=$baseurl?>static/images/logo.png" alt="JPTS Logo" class="img-fluid" width="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-light"></span>
                <span class="text-light"></span>
                <span class="text-light"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item my-1 my-md-0">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item my-1 my-md-0">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item my-1 my-md-0">
                        <a class="nav-link" href="/signup">Signup</a>
                    </li>
                    <li class="nav-item my-1 my-md-0">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR SECTION -->