<?php
    if (isset($_POST["pseudo"] ) && isset ($_POST["mdp"])) 
        {

            $choix=["Paul","Jean","Claude","Van damme"];
            $mdp=["mdp01","mdp12","mdp23","mdp34"];
            $pseudo=$_POST["pseudo"];
            $password=$_POST["mdp"];

               function verifierMotDePasse($pseudo,$password,$choix,$mdp)
            { 
                for($i=0;$i<count($choix);$i++)
                
                {
                    if ($choix[$i]==$pseudo){
                        if($mdp[$i] == $password) {
                            echo "ok mdp";
                            echo "<br>";
                            header ("Location:../jeux.php");
                            
                        }
                        break;
                    }
                    else {
                        echo "NON";
                    }
                
                }
            }
            
            verifierMotDePasse($pseudo,$password,$choix,$mdp);
}
   

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        <label>Pseudo </label> <br>
<input type="text" name="pseudo"  required> <br>
<label>Mot de passe :/<label>
<input type="password" name="mdp"  required> <br>
<button type= "submit">Envoyer</button>
</form>
</body>
</html>