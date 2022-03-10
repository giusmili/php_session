<?php
    //sessions
    session_start(); //démarrage de la session
    $id_session = session_id();
    const title = "Les sessions";
   $_years = date("Y");
   //class statique
    class User{
        public $_css = "./css/main.css";
        
    }
    $_style = new User;
?>

<?php
    include_once "./src/header.inc.php";
?>

<body>
    <header>
        <h1>
            <?= title ?>
        </h1>
    </header>
    <main>
        <!-- formulaire -->
        <section>
            <h2>
                connectez vous
            </h2>
            <fieldset>
                <legend>
                    Votre espace
                </legend>
                <form class="form_add" action="<?php $_SERVER['PHP_SELF']?>"  method="post">
                <label for="login">
                    Votre login
                </label>
                <input 
                    type="email" 
                    name="login" 
                    id="login" 
                    placeholder="Votre login" 
                    aria-required="true">
                    <input type="submit" value="Send">
                </form>
            </fieldset>
        </section>
        <?php
       
       $id_session ? print 'ID de session récupéré via session_id()<br> '.$id_session. '<br>' : false;
       /* test de session user récupérer les cookie */
       if(isset($_POST['login']) && isset($_COOKIE['PHPSESSID'])){
           $_login = $_POST['login'];
            if(!$_login){
               print "<section><p>Redmplir les champs</p></section>";
         }
         else{
           $_SESSION['nom'] = $_login;
           print '<section><p class="success">Bonjour : '.$_SESSION['nom'].'</p></section>';
           print '<section>
                    <p class="success">
                    <a href="session_user.php" class="button-success button-success-color">Vos informations</a></p>
           </section>';
           /* afficher la session récupéré*/
           echo '<section><p>ID de session (récupéré via $_COOKIE) : <br></p></section>'
           .$_COOKIE['PHPSESSID'];
         }
       }   
   ?>
    </main>
    <!--traitement php pour le formulaire -->
 
    <footer>
        <p>&copy; - PHP - <?= $_years ?></p>
    </footer>
    <script>
        let nom, prenom, ville
            nom = ""
            prenom = ""
            ville = ""
    
       
    </script>
</body>
</html>