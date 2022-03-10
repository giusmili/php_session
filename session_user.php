<?php
//sessions
    session_start(); //démarrage de la session
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
            Welcome <?= $_SESSION["nom"]?>
        </h1>
    </header>
    <main>
        <section>
            <p class="success">Hello! Vous êtes <?php echo $_SESSION["nom"]. " nous sommes le ". date("d/m/Y");?></p>
            <p>'ID de session (récupéré via $_COOKIE) : <br><?=$_COOKIE['PHPSESSID']?></p>
        </section>
    </main>
</body>
</html>
<?php
session_destroy();
?>