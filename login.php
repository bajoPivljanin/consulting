<?php 
require_once 'inc/header.php';
require_once "app/config/config.php"; 

if($user->is_logged()){
    header('location: index.php');
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $user->login($username,$password);

    if(!$result){
        $_SESSION['message']['type'] = "danger";
        $_SESSION['message']['text'] = "Wrong username or password.";
        header('location:login.php');
        exit;
    }
    else{
        $_SESSION['message']['type'] = "success";
        $_SESSION['message']['text'] = "Successfully registred.";
        header('location:index.php');
        exit;
    }

}
?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <h3 class="text-center py-5 ">Login</h3>
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label for="username" class="">Korisničko ime</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="">Šifra</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-primary-hover">Uloguj se</button>
                    
                </form>
                <br>
                    <a href="register.php" class="link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Nemaš nalog? Registruj se.</a>
                    
            </div>
        </div>
    </div>
    <br><br>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <?php require_once 'inc/footer.php';?>