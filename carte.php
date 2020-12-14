<?php include_once("functions.php"); 
head(); ?>

<section id="cardPage">
    <div id="card">
        <div id="sapin">
        </div>
        <div id="message">
            <p>Chèr(e) <?= $_GET['destinataire']?>, </p>
            <p><?php include_once("svg.php");?></p>
            <p><?= $_GET['envoyeur']?></p>
        </div>
    </div>
    <span>Et aussi de la part de l'acs</span>
</section>

<?php foot(); ?>