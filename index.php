<?php include_once("functions.php"); 
head(); ?>

<section id="form">
    <form method="post">
        <input type="text" name="mail" id="mail" placeholder="Adresse mail destinataire" class="inputText">
        <input type="text" name="destinataire" id="destinataire" placeholder="Prénom du destinataire" class="inputText">
        <input type="text" name="envoyeur" id="envoyeur" placeholder="Prénom de l'envoyeur" class="inputText">
        <input type="button" value="Envoyer le mail" class="inputButton">
    </form>
</section>

<?php foot(); ?>