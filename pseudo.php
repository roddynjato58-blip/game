<?php
    if (isset($_POST["pseudo"] ) && isset ($_POST["mdp"])) 
        {

            $choix=["Paul","Jean","Claude","Van damme"];
            $mdp=["mdp01","mdp12","mdp23","mdp34"];
            $pseudo=$_POST["pseudo"];
            $password=$_POST["mdp"];

            function verifierMotDePasse($pseudo,$password,$choix,$mdp)
            { 
                echo $pseudo;
                echo $password;
                echo "<br>";
                for($i=0;$i<count($choix);$i++)
                
                {
                    var_dump($choix);
                    echo "<br>";
                    var_dump($choix[$i]);
                    if ($pseudo==$choix[$i]){
                        if ($password==$mdp[$i])
                        { 
                            var_dump("okeeeeeee ", $choix[$i] , $mdp[$i]);
                            header ("Location:jeux.php");
                            return true ;

                        }
                        else
                        { 
                            var_dump("diso mdp ", $choix[$i] , $mdp[$i]);
                            echo "NON";
                            return false;
                        }
                        
                    }
                    else {
                             var_dump("diso pseudo ", $choix[$i] , $mdp[$i]);
                            echo "NON";
                            return false;
                        }
                    break;
                }
            }
            
            echo verifierMotDePasse($pseudo,$password,$choix,$mdp);
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