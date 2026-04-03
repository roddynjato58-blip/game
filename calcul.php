<?php
$nombre1 = rand(1,10);
$nombre2 = rand(1,10);

    $operations = ['+','-','*','/'];
    $operations=
    $operations[array_rand($operations)];

switch ($operations)
       {
            case '+': $resultat= $nombre1+ $nombre2; break;
            case '-': $resultat= $nombre1- $nombre2;break;
            case '*': $resultat= $nombre1 * $nombre2;break;
            case '/': $resultat= $nombre1 / $nombre2;break;
       }

 $message="";
        if(isset($_POST['reponse'])) 
        {
            $user= $_POST['reponse'];
            $correct= $_POST['resultat'];

         if ($user== $correct)  
         {
            $message="<p style= 'color: green;'>Bonne réponse </p>";
         }
         else 
         {
         $message="<p style='color:red;'>Faux .Réponse:$correct </p>";

         }

        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de calcul mental</title>
</head>
<body>
    <h2>Jeu de calcul mental</h2>
    <form method="post">
        <p> <?php echo "$nombre1 $operations $nombre2= ?"; ?></p>
        <input type="number" name="reponse" required>
        <input type="hidden" name="resultat" value="<?php echo $resultat; ?>">

        <br><br>
        <button type="submit">Valider</button>
</form>
    <?php echo $message; ?>
</body>
</html>