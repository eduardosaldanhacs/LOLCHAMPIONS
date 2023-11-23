<?php
    require_once("templates/header.php");

    $championDao = new ChampionDao($conn, $BASE_URL);

    $listofToplaners = $championDao->getLaners("TOPLANER");
    $listofJunglers = $championDao->getLaners("JUNGLER");
    $listofMidlaners = $championDao->getLaners("MIDLANER");
    $listofAdcarries = $championDao->getLaners("ADCARRY");
    $listofSupports = $championDao->getLaners("SUPPORT");

?>
    <div class="container">

        <div class="container-toplaner">
            <div class="toplaner-group">
                <div class="laner-title">
                    <h3>Toplaner</h3>
                </div>
                <? foreach($listofToplaners as $toplaner): ?>
                    <div class="champion-item">
                        <p>Nome: <?= $toplaner['name'] ?></p>
                        <p>Rota: <?= $toplaner['laner'] ?></p>
                        <p>Lançamento: <?= $toplaner['launch'] ?></p>
                        <p>Região: <?= $toplaner['region'] ?></p>
                        <p><img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/<?=ucfirst(strtolower($toplaner['name']))?>_0.jpg" alt=""></p>
                    </div>
                <? endforeach; ?>
            </div>        
        </div>
    
        <div class="container-jungler">
            <div class="jungler-group">
                <div class="laner-title">
                    <h3>Junglers</h3>
                </div>
                <? foreach($listofJunglers as $jungler): ?>
                    <div class="champion-item">
                        <p>Nome: <?= $jungler['name'] ?></p>
                        <p>Rota: <?= $jungler['laner'] ?></p>
                        <p>Lançamento: <?= $jungler['launch'] ?></p>
                        <p>Região: <?= $jungler['region'] ?></p>
                        <p><img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/<?=ucfirst(strtolower($jungler['name']))?>_0.jpg" alt=""></p>
                    </div>
                <? endforeach; ?>
            </div>
        </div>

        <div class="container-midlaner">
            <div class="midlaner-group">
                <div class="laner-title">
                    <h3>Midlaners</h3>
                </div>               
                <? foreach($listofMidlaners as $midlaner): ?>
                    <div class="champion-item">
                        <p>Nome: <?= $midlaner['name'] ?></p>
                        <p>Rota: <?= $midlaner['laner'] ?></p>
                        <p>Lançamento: <?= $midlaner['launch'] ?></p>
                        <p>Região: <?= $midlaner['region'] ?></p>
                        <p><img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/<?=ucfirst(strtolower($midlaner['name']))?>_0.jpg" alt=""></p>
                    </div>
                <? endforeach; ?>
            </div>

        </div>

        <div class="container-adcarry">
            <div class="adcarry-group">
                <div class="laner-title">
                    <h3>Adcarries</h3>
                </div>
                <? foreach($listofAdcarries as $adcarry): ?>
                    <div class="champion-item">
                        <p>Nome: <?= $adcarry['name'] ?></p>
                        <p>Rota: <?= $adcarry['laner'] ?></p>
                        <p>Lançamento: <?= $adcarry['launch'] ?></p>
                        <p>Região: <?= $adcarry['region'] ?></p>
                        <p><img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/<?=ucfirst(strtolower($adcarry['name']))?>_0.jpg" alt=""></p>
                    </div>
                <? endforeach; ?>
            </div>
        </div>

        <div class="container-support">
            <div class="support-group">
                <div class="laner-title">
                    <h3>Support</h3>
                </div>
                <? foreach($listofSupports as $support): ?>
                    <div class="champion-item">
                        <p>Nome: <?= $support['name'] ?></p>
                        <p>Rota: <?= $support['laner'] ?></p>
                        <p>Lançamento: <?= $support['launch'] ?></p>
                        <p>Região: <?= $support['region'] ?></p>
                        <p><img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/<?=ucfirst(strtolower($support['name']))?>_0.jpg" alt=""></p>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    
    </div>


<?php 
    require_once("templates/footer.php");
?>  
