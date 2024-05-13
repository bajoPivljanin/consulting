<?php 
    require_once "app/config/config.php"; 
    require_once "app/classes/User.php";
    $user = new User();
    header("Cache-Control: no cache");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@700,400,500,600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9310e1148a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <link rel="stylesheet" href="scss/style.css">
    <title>consulting.com</title>
    <link rel="icon" href="./img/logo.png">
</head>
<body>
    
    <header>
        <div class="container">
            <div class="gornji-nav">
                <div class="row">
                    <div class="col-md-6">
                       <a href="index.php">consulting.com</a>
                    </div>
                    <div class="col-md-6">
                        <div class="right-gornji">
                            <ul>
                                <li><a href="#"> <i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"> <i class="fa-brands fa-square-facebook"></i></a></li>
                            </ul>  
                            <i class="fa-solid fa-bars" id="menuopen"></i>
                            <i class="fa-solid fa-xmark" id="menuclose"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="donji-nav">
                <div class="row">
                    <ul>
                        <!-- <i class="fa-solid fa-house"></i> -->
                        <li><a href="index.php">pocetna</a></li>
                        <li><a href="pretraga.php">pretraga</a></li>
                        <li><a href="#">faq</a></li>
                        <?php if($user->is_logged()):?>
                        <li><a href="logout.php"><b>izloguj se</b></a></li>
                        <?php else:?>
                        <li><a href="login.php"><b>uloguj se</b></a></li>
                        <li><a href="register.php"><b>registruj se</b></a></li>
                        <?php endif;?>    
                    </ul>
                </div>
            </div>
        </div>
    </header>