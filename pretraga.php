<?php 
    require_once 'inc/header.php';
    require_once 'app/classes/Business.php';
    require_once 'app/classes/Expert.php';
    
    $businesses = new Business();
    $businesses = $businesses->fetch_all();

    $experts = new Expert();
    $experts = $experts->fetch_for_search();

    $count = new Expert();
    $count = $count->count_all();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['search'])) {
            $value = $_POST['search'];
            if(!empty($value)){
                $experts = new Expert();
                $experts = $experts->search($value);
            }
            else{
                header("Cache-Control: no cache");
                session_cache_limiter("private_no_expire");
                exit();
            }
        }
    }
   

?>
<link rel="stylesheet" href="./pretragacss/pretraga.css">
<body>
    <div class="mesto">
        <div class="pretraga-text">
            <h1>Pretraga | <span> <?php echo $count?> aktivno</span></h1>
        </div>
        <form method="POST" action="pretraga.php">
            <select name="search" id="search" class="custom-select">
                <option value="" disabled selected>Izaberite oblast zanimanja</option>
                    <?php foreach($businesses as $business):?>
                        <option value="<?=$business['business_id']?>"><?=$business['name']?></option>
                    <?php endforeach;?>
            </select> 
            <button type="submit">Pretraži</button>
        </form> 
    </div>
    
    <div class="oglasi">
    <?php foreach($experts as $expert):?>
        <div class="oglas1">
            <a href="expert.php?expert_id=<?=$expert['expert_id']?>">
          <div class="container">
            <div class="row">
                    <div class="col-md-6">
                        <img src="img/<?=$expert['image']?>" alt="">
                    </div>
                    <div class="col-md-6">
                        <h1><?=$expert['first_name']?> <?=$expert['last_name']?> <i class="fa-regular fa-square-check"></i></h1>
                        <h2>Stručnjak za <?=strtolower($expert['name'])?></h2>
                        <ul>
                            <?php 
                            $data = explode(',', $expert['short_description']);
                            ?>
                            <?php foreach ($data as $part):?>
                            <li><?php echo $part?></li> 
                            <?php endforeach;?>
                        </ul>
                       <span><i class="fa-solid fa-image-portrait"></i> 25</span>
                    </div>
                </div>
            </div>
            </a>
        </div>
            <?php endforeach;?>
    </div>
    <?php require_once 'inc/footer.php';?>