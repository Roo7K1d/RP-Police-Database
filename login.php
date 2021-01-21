<?php
session_start();

include( "config.php" );

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM users WHERE mail = ? AND password = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['name'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: index.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Email address or password is invalid !";
      }
   } else {
      $erreur = "All fields should be completed !";
   }
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>



    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <body class="align">

        <div class="grid">

            <form method="POST" action="" class="form login">

                <header class="login__header">
                    <img src="https://lossantospolicedepartmentlspd.weebly.com/uploads/2/5/6/4/25644844/6606452.png">
                    <h3 class="login__title">LSPD Login</h3>
                </header>

                <div class="login__body">

                    <div class="form__field">
                        <input type="email" name="mailconnect" placeholder="eMail">
                    </div>

                    <div class="form__field">
                        <input type="password" name="mdpconnect" placeholder="password">
                    </div>

                </div>

                <footer class="login__footer">
                    <input type="submit" value="Login" name="formconnexion">

                    <p><span class="icon icon--info">?</span><a href="#">Forgot your password</a></p>
                </footer>

            </form>
            <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
        </div>

    </body>


</body>

</html>