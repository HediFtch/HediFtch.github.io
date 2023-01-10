<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Dans le formulaire précédent, vous avez fourni les
        informations suivantes :</p>
        
        <?php
            echo 'Genre : '.$_POST['genre'].'<br>';
            echo 'Nom : '.$_POST['nom'].'<br>';
            echo 'Prénom : '.$_POST['prenom'].'<br>';
            echo 'Email : '.$_POST['mail'].'<br>';
            echo 'Date de naissance : '.$_POST['date'].'<br>';
            echo 'Sport pratiqué : '.$_POST['sport'].'<br>';
            
        ?>
    </body>
</html>