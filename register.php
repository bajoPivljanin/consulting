<?php 
    require_once 'inc/header.php';
    require_once "app/config/config.php";
    require_once "app/classes/User.php";
    $user = new User();
    if($user->is_logged()){
        header('location:reservation.php');
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $created = $user->create($first_name,$last_name,$username,$phone_number,$email,$password);

        if($created){
            $_SESSION['message']['type'] = "success";
            $_SESSION['message']['text'] = "Successfully registred.";
            header('location:reservation.php');
            exit;
        }
        else{
            $_SESSION['message']['type'] = "danger";
            $_SESSION['message']['text'] = "Error.";
            header('location:index.php');
            exit;
        }
    }
?>
 
<div class="container">
<b><h1 class="mt-5 mb-3">Registruj se</h1> </b>
    <form action="" method="post">
        <div class="form-group mb-3">
            <label for="first_name">Ime</label>
            <input type="text" name="first_name" id="first_name" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="last_name">Prezime</label>
            <input type="text" name="last_name" id="last_name" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="username">Korisničko ime</label>
            <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="phone_number">Broj telefona</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="email">Email adresa</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="password">Šifra</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Registruj se</button>
    </form>
    <a href="login.php" class="mb-2">Imaš nalog? Uloguj se.</a>
    </div>
    <br>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php require_once 'inc/footer.php';?>