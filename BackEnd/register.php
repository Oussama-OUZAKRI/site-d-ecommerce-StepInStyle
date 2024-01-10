<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
 



session_start();

if (isset($_POST['boutton-valider'])) {
    
    
     {
        // Mettre les données dans des variables
        $Firstn = $_POST['First_name'];
        $Lastn = $_POST['Last_name'];
        $Usern = $_POST['email'];
        $Password = $_POST['Password'];
        $ConfirmP = $_POST['Confirm_Password'];
        $erreur = "";

        $nom_serveur = "localhost:3308";
        $utilisateur = "root";
        $mot_de_passe = "";
        $nom_base_donnees = "form";
        $conn = new mysqli($nom_serveur, $utilisateur, $mot_de_passe, $nom_base_donnees);

        // Vérifier la connexion
        if ($conn->connect_error) {
            die("Erreur de connexion à la base de données : " . $conn->connect_error);
        }

        // Requête d'insertion avec auto-incrémentation de idu
        $insertionClient = $conn->prepare('INSERT INTO utilisateurs(email,mdp) VALUES(?,?)');
        $insertionClient->execute(array($Usern, $Password));

        // Redirection
        header("Location:index.php");
        $_SESSION['email'] = $Usern ;
        
        exit; // Assurez-vous d'arrêter l'exécution après la redirection
     }
}

 
            
        
    



 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StepInStyle - Register</title>
    <link rel="stylesheet" href="register-style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><link href="style/select2/select2.min.css" rel="stylesheet" />
    <script src="script/select2.full.min.js"></script>
<body>
    <style>
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
    </style>
    <section>
        <div class="register_box">
        <form action="" method="POST">  
                <h2>Register</h2>
                <div class="name_box">
                    <div>
                        <input type="text" required name="First_name">
                        <label>First name</label>
                    </div>
                    <div>
                        <input type="text" required name="Last_name">
                        <label>Last name</label>
                    </div>
                </div>
                <div class="input_box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" required name="email">
                    <label>User ID</label>
                </div>
                <div class="input_box">
                    <select name="Gender" class="custom_select" required>
                        <option></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="input_box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="Password">
                    <label>Password</label>
                </div>
                <div class="input_box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="Confirm_Password">
                    <label>Confirm Password</label>
                </div>
                <div class="terms_service">
                    <label><input type="checkbox" > I agree all statements in <a href="#">Terms of service</a> </label>
                </div>
                <input class="button" type="submit" value="submit" name="boutton-valider">
                <div class="login_link">
                    <p>You have an account? <a href="login.php"> Login</a></p>
                </div>
            </form>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('.custom_select').select2({
                minimumResultsForSearch: Infinity,
                placeholder: "Gender"
            });
        });
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>