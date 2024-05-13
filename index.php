<?php 
    require_once 'inc/header.php';
    require_once 'app/classes/Business.php';
    require_once 'app/classes/Expert.php';

    $businesses = new Business();
    $businesses = $businesses->fetch_all();
    header("Cache-Control: no cache");
?>

    <div class="hero-section">
        <h1>Nauči od najboljeg, budi najbolji!</h1>
        <p>Sajt za savetovanje sa stručnjacima najboljim u svojoj oblasti zanimanja</p>
        <div class="mesto">
            <form method="post" action="pretraga.php">
                <select name="search" id="custom-select" class="custom-select">
                    <option value="" disabled selected>Izaberite oblast zanimanja</option>
                    <?php foreach($businesses as $business):?>
                        <option value="<?=$business['business_id']?>"><?=$business['name']?></option>
                    <?php endforeach;?>
                </select> 
                <button type="submit">Pretraži</button>
            </form> 
            <!-- <input type="submit" value="submit" id="submitday"> -->
        </div>
    </div>

    <div class="ponude-section">
        <div class="container">
            <h1>Popularne pretrage</h1>
            <p>Izdvajanje trenutnih popularnih pretraga oblasti zanimanja</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="ponuda1">
                        <h1>Programiranje</h1>
                        <!-- <p>15 strucnjaka</p> -->
                        <!-- <img src="/img/serbia.png" alt=""> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ponuda2">
                        <h1>Preduzetnistvo</h1>
                        <!-- <p>info</p> -->
                        <!-- <img src="/img/serbia.png" alt=""> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="ponuda3">
                        <h1>Prodaja</h1>
                        <!-- <p>info</p> -->
                        <!-- <img src="/img/serbia.png" alt=""> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ponuda4">
                        <h1>E-Commerce</h1>
                        <!-- <p>info</p> -->
                        <!-- <img src="/img/serbia.png" alt=""> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ponuda5">
                        <h1>FB Reklame</h1>
                        <!-- <p>info</p> -->
                        <!-- <img src="/img/serbia.png" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="strucnjaci">
        <h1>Preporučujemo</h1>
        <p id="header">Najaktivniji i najpopularniji stručnjaci trenutno koje preporučujemo</p>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="img/covek1.png" alt="">
                    <h2>Ana Petrović</h2>
                    <p>Stručnjak za <span>prodaju</span> </p>
                </div>
                <div class="col-md-3">
                    <img src="img/covek2.png" alt="">
                    <h2>Marko Jovanović</h2>
                    <p>Stručnjak za <span>marketing</span></p>
                </div>
                <div class="col-md-3">
                    <img src="img/covek3.png" alt="">
                    <h2>Milica Kovačević</h2>
                    <p>Stručnjak za <span>programiranje</span></p>
                </div>
                <div class="col-md-3">
                    <img src="img/covek4.png" alt="">
                    <h2>Stefan Novak</h2>
                    <p>Stručnjak za <span>preduzetništvo</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="mark-section">
        <h1>Najbolji saveti, brzo i efikasno</h1>
        <p>Otkrijte prednosti korišćenja consulting-a</p>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <i class="fa-solid fa-bullhorn"></i>
                    <h1>Personalizovano iskustvo</h1>
                    <p>Umesto da se oslanjaju na opšte informacije na internetu, korisnici dobijaju savete i odgovore koji su tačno usklađeni sa njihovim zahtevima, što doprinosi većoj efikasnosti i uspešnosti u rešavanju njihovih problema ili ostvarivanju ciljeva.</p>
                </div>
                <div class="col-md-4">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <h1>Pouzdanost i kvalitet</h1>
                    <p>Svi stručnjaci na našoj platformi su provereni i verifikovani u svojim oblastima, garantujući korisnicima kvalitetne informacije i podršku. Ovo osigurava da korisnici mogu imati poverenja u savete koje dobijaju.</p>
                </div>
                <div class="col-md-4">
                    <i class="fa-solid fa-shield-halved"></i>
                    <h1>Ušteda vremena i resursa</h1>
                    <p>Korišćenjem naše platforme, korisnici izbegavaju dugotrajne procese traženja relevantnih informacija ili čekanja na slobodne termine kod lokalnih stručnjaka. Umesto toga, mogu brzo i efikasno doći do odgovora i rešenja direktno putem online konsultacija.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-news">
                        <h1>Prijava na newsletter</h1>
                        <p>Ostavi nam svoj email i budi u toku sa dešavanjima!</p>
                        <form action="">
                            <input type="text" placeholder="Vasa email adresa">
                            <button>Prijavite se</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-news">
                        <img src="./img/logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'inc/footer.php';?>
