<?php 
 
   session_start() ;
  if(isset($_POST['boutton-valider'])){ // Si on clique sur le boutton , alors :
    //Nous allons verifiér les informations du formulaire
    if(isset($_POST['email']) && isset($_POST['mdp'])) { //On verifie ici si l'utilisateur a rentré des informations
      //Nous allons mettre l'email et le mot de passe dans des variables
      $email = $_POST['email'] ;
      $mdp = $_POST['mdp'] ;
      $erreur = "" ;
       //Nous allons verifier si les informations entrée sont correctes
       //Connexion a la base de données
       $nom_serveur = "localhost:3308";
       $utilisateur = "root";
       $mot_de_passe ="";
       $nom_base_donnees ="form" ;
       $conn = new mysqli($nom_serveur, $utilisateur, $mot_de_passe, $nom_base_donnees);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

       //requete pour selectionner  l'utilisateur qui a pour email et mot de passe les identifiants qui ont été entrées
        $req = mysqli_query($conn , "SELECT * FROM utilisateurs WHERE email = '$email' AND mdp ='$mdp' ") ;
        $num_ligne = mysqli_num_rows($req) ;//Compter le nombre de ligne ayant rapport a la requette SQL
        if($num_ligne > 0){
            header("Location:index.php") ;//Si le nombre de ligne est > 0 , on sera redirigé vers la page bienvenu
            // Nous allons créer une variable de type session qui vas contenir l'email de l'utilisateur
            $_SESSION['email'] = $email ;
        }else {
            $erreur = "Adresse Mail ou Mots de passe incorrectes !";
        }
    }
}




    ?>
   <!DOCTYPE html>
   
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StepInStyle - Login</title>
    
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

section {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
    background: url('bg.jpg') no-repeat;
    background-size: cover;
    background-position: center;
    animation: animateBg 5s linear infinite;
}
@keyframes animateBg {
    100% {
        filter: hue-rotate(360deg)
    }
}
.login_box {
    position: relative;
    width: 400px;
    height: 450px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .5);
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(15px);
}
h2 {
    font-size: 2em;
    color: #fff;
    text-align: center;
}
.input_box {
    position: relative;
    width: 310px;
    margin: 30px 0;
    border-bottom: 2px solid #fff;
    
}
.input_box label {
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 1em;
    color: #fff;
    pointer-events: none;
    transition: .5s;
}
.input_box input:focus~label,
.input_box input:valid~label {
    top: -5px;
}
.input_box input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    color: #fff;
    padding: 0 35px 0 5px;
}
.input_box .icon {
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1.2em;
    line-height: 57px;
}
.remember_forgot {
    margin: -15px 0 15px;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: space-between;
}
.remember_forgot label input {
    margin: 3px;
}
.remember_forgot a {
    color: #fff;
    text-decoration: none;
}
.remember_forgot a:hover {
    text-decoration: underline;
}
.button {
    width: 100%;
    height: 40px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 1em;
    color: #000;
    font-weight: 500;
}
.button:hover {
    opacity: .5;
}
.register_link {
    font-size: .9em;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
}
.register_link p a {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}
.register_link p a:hover {
    text-decoration: underline;
}
@media screen and (max-width: 360px) {
    .login_box {
        width: 100%;
        height: 100vh;
        border: none;
        border-radius: 0;
    }
    .input_box {
        width: 290px;
    }
}
.Erreur {
        color: #ff0000; /* Couleur rouge */
        text-align: center; /* Centrer le texte */
        font-size: 1.2em; /* Taille de la police */
        margin-top: 10px; 
}

</style>

    
<body>
<?php 
if(isset($erreur)){// si la variable $erreur existe , on affiche le contenu ;
        echo "<p class= 'Erreur'>".$erreur."</p>"  ;
    }
    ?>

       
    <section>
   
    
    
    

        <div class="login_box">
        
      
      
       <form action="" method="POST">  <!--on ne mets plus rien au niveau de l'action , pour pouvoir envoyé les données  dans la même page -->
            <p>

                <h2>Login</h2>
                <div class="input_box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="email">
                    <label>Username</label>
                </div>
                <div class="input_box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="mdp">
                    <label>Password</label>
                </div>
                <div class="remember_forgot">
                    <label><input type="checkbox"> Remember me</label>
                    <a>Forgot Password?</a>
                </div>
                <input class="button" type="submit" value="Valider" name="boutton-valider">
                <div class="register_link">
                    <p>Don't have an account? <a href="register.php"> Register</a></p>
                </div>
</p>
            </form>
    </form>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
</body>
</html>