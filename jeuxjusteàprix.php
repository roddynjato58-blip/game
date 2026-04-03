<?php
session_start();

if(!
    isset( $_SESSION['nombre_ secret'])) 
{
        $_SESSION['nombre_secret']=
        rand(1,50);
        $_SESSION['essais']=0;
}
    $message="";

if(isset($_POST['proposition'])) 
    {
        $proposition=$_POST['proposition'];
        $_SESSION['essais']++;

if ($proposition<$_SESSION['nombre_secret']) 
        {
            $message="📈C'est plus grand!";
        }
        elseif ($proposition>$_SESSION['nombre_secret'])
        {
            $message="📉C'est plus petit";

        }
        else
        {
            $message="💡Bravo! Tu  as trouvé en ".$_SESSION['essai']."essais !";
        }
   }   
//Recommencer
if (isset($_POST['reset'])) 
    {
        session_destroy();
        header("Location:jeuxjusteàprix.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justeprix</title>
</head>
<body>
<h2>Jeu de juste Prix</h2>
<p>Devine un nombre entre 1 et 50</p>
<form method="post">
   <input type="number" name="proposition" required>
<button type="submit">Essayer</button>
</form>
<p><?php echo $message;?></p>
<p>Nombre d'essais :<?php echo $_SESSION['essais'];?></p>
    <form method="post">
    <button name="reset">💱 Rejouer</button>
    </form>
    
</body>
</html>