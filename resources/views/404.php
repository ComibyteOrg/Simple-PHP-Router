<?php $baseurl = "/resources/"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$baseurl?>bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>Page Not Found</title>
</head>
<body>
    
<style>
    .container{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .btn{
        background-color: #c2004a;
        color: white;
        border: 1px solid #c2004a !important;
    }
    h1{
        font-size: 90px;
    }
</style>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body text-center">
                <h1 class="card-title">404</h1>
                <p class="card-text">Seems like this page you are looking for does not exist</p>
                <a href="/" class="btn">Go somewhere</a>
            </div>
        </div> 
    </div>

    <script src="<?=$baseurl?>bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>