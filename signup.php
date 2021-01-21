<?php

include( "config.php" );

if(isset($_POST['forminscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 32) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM users WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO users(name, mail, password, id) VALUES(?, ?, ?, ?)");
                     $rand = rand(10000, 100000);
                     $insertmbr->execute(array($pseudo, $mail, $mdp, $rand));
                     $erreur = "Your account has been created! <a href=\"login.php\">Login Here</a>";
                  } else {
                     $erreur = "Passwords do not match!";
                  }
               } else {
                  $erreur = "Email is already in use!";
               }
            } else {
               $erreur = "Your email address is invalid!";
            }
         } else {
            $erreur = "Password do not match!";
         }
      } else {
         $erreur = "Username can be a maximum of 32 characters!";
      }
   } else {
      $erreur = "All of the fields must be filled!";
   }
}
?>
<html>

<head>
    <title>LSPD</title>
    <meta charset="utf-8">
</head>

<body>
    <div align="center">
        <h2>Registration</h2>
        <br /><br />
        <form method="POST" action="">
            <table>
                <tr>
                    <td align="right">
                        <label for="pseudo">Username :</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Username" id="pseudo" name="pseudo"
                            value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mail">Email :</label>
                    </td>
                    <td>
                        <input type="email" placeholder="Email Address" id="mail" name="mail"
                            value="<?php if(isset($mail)) { echo $mail; } ?>" />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mail2">Confirm Email :</label>
                    </td>
                    <td>
                        <input type="email" placeholder="Confirm Email" id="mail2" name="mail2"
                            value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mdp">Password :</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Password" id="mdp" name="mdp" />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mdp2">Confirm Password :</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Confirm Password" id="mdp2" name="mdp2" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td align="center">
                        <br />
                        <input type="submit" name="forminscription" value="Sign up" />
                    </td>
                </tr>
            </table>
        </form>
        <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
    </div>
</body>

</html>