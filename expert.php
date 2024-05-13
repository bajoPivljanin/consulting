<?php 
    require_once 'inc/header.php';
    require_once 'app/classes/Business.php';
    require_once 'app/classes/Expert.php';
    
    $businesses = new Business();
    $businesses = $businesses->fetch_all();
    $expert = new Expert();
    $expert = $expert->show_details($_GET['expert_id']);
?>
    <link rel="stylesheet" href="./calscss/cal.css">
    <link rel="icon" href="./img/logo.png">
<body>


    <div class="strucnjak">
        <div class="container">
          <div class="row">
              <div class="col-md-6">
                <div class="levostr">
                    <img src="img/<?=$expert['image']?>" alt="">
                    <div class="tekst">
                        <h1><?=$expert['first_name']?> <?=$expert['last_name']?> </h1>
                        <h2>Oblast: <?=strtolower($expert['name'])?></h2>
                        <h3>Cena: <span>$<?=$expert['price']?>/h</span></h3>
                        <p><?=$expert['long_description']?></p>
                        <a href="#"> <i class="fa-brands fa-instagram"></i></a>
                        <a href="#"> <i class="fa-brands fa-square-facebook"></i></a>
                        <a href="#"> <i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <!-- Calendly inline widget begin -->
                <div class="calendly-inline-widget" data-url="https://calendly.com/milosantunovic1?primary_color=9c7a00&" style="min-width:320px;height:700px;"></div>
                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                <!-- Calendly inline widget end -->
              </div>
          </div>
      </div>
</div>

<?php require_once 'inc/footer.php';?>