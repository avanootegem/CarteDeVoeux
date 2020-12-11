<?php include_once("functions.php"); 
head(); ?>

<?php
if(isset($_POST['mailform'])){
    if(!empty($_POST['destinataire']) AND !empty($_POST['mail']) AND !empty($_POST['envoyeur'])){
        $header="MIME-Version: 1.0\r\n";
        $header.="From: https://aurelienv.promo-45.codeur.online/CarteDeVoeux/\r\n";
        $header.="Content-Type: text/html; charset=utf-8\r\n";
        $header.="Content-Transfer-Encoding: 8bit\r\n";

        $message='
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
        .wrapper{
            width: 100%;
            table-layout: fixed;
            background-color: #333333;
            padding-bottom: 40px;
        }
        .main{
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
            border-spacing: 0;
            font-family: sans-serif;
            color: #e4e4e4;
            background-color: #333333;
            height: 100vh;
        }
        </style>
        </head>
        <body>

            <center class="wrapper">

                <table class="main" width="100%">

                    <tr>
                    <span> Veuillez cliquez sur ce 
                    <a href="https://aurelienv.promo-45.codeur.online/CarteDeVoeux/carte.php?destinataire='.$_POST['destinataire'].'&envoyeur='.$_POST['envoyeur'].'">lien</a>
                        
                    </tr>

        
                </table>
            </center>
        </body>
        </html>
        ';
        
        mail($_POST['mail'], "Vous avez reçu une carte de voeux", $message, $header);
        $msg="Votre carte de voeux a bien été envoyé!";
    }
    else{
        $msg="Tous les champs doivent être renseignés!";
    }
}

?>

<section id="form">
    <form method="post">
        <input type="text" name="mail" id="mail" placeholder="Adresse mail destinataire" class="inputText">
        <input type="text" name="destinataire" id="destinataire" placeholder="Prénom du destinataire" class="inputText">
        <input type="text" name="envoyeur" id="envoyeur" placeholder="Prénom de l'envoyeur" class="inputText">
        <input type="submit" value="Envoyer le mail" name="mailform" class="inputButton">
    </form>
</section>

<?php foot(); ?>