<?php 
session_start();
include("connexion.php");
$msg="";
  if(isset($_POST['submit'])){
    // echo "<pre>";
    // print_r($_POST);
    $email =mysqli_real_escape_string($con,$_POST['email']);
    $password =mysqli_real_escape_string($con,$_POST['password']);
  $sql= mysqli_query($con,"select * from medecin where gmail='$email' && password='$password'");
  $num=mysqli_num_rows($sql);
  if($num>0){
    // echo "found ";
    $row=mysqli_fetch_assoc($sql);
    $_SESSION['USER_ID']=$row['id'];
    $_SESSION['USER_NAME']=$row['prenom'];
    header("location:index.php");
  }else{
    $msg = "Veuillez entrer correctement vos informations !";

  }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="signIn.css" />
    <script
      src="https://kit.fontawesome.com/yourcode.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="icon" type="image/png" href="./img/Layer 1.png" />
    <title>Se connecter à Shifae|Espace medecin</title>
  </head>
  <body>
    <!-------------------  NAV SECTION ---------------------->
    <nav>
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn"> <i class="fa fa-bars"></i></label>
        <div class="wrapping">
          <!-- <img class="imglogo" src="assets/img/logoshifae.png" alt=" img " /> -->
          <img class="petit" src="logo.png" alt=" img2 " />
          <label class="name">Shifae</label>
        </div>
  
        <ul>
          <li><a href="../pageAccueil/in.php" class="active">Accueil</a></li>
          <li><a href="signIn.php">Se connecter</a></li>
          <li><a href="../pageAccueil/in.php #blogs">Services</a></li>
          <li><a href="../about/index.html">À propos</a></li>
          <li><a href="../contactus/contact.php">Contact</a></li>
        </ul>
      </nav>
    <!--The container section-->
    
    <div class="login-container">
      
      <div class="contenu">
      <div class="title1">Bienvenue !</div>
      <div class="img" >
        <!--img src="./images/avatar.png" class="avatar"/-->
        <img src="./images/doc.png" class="doc"/>
      </div>
      <div class="title2">Se connecter</div>
      <form action=""  method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Adresse Email</span>
            <input type="email" placeholder="entrez votre adresse email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Mot de passe</span>
            <input type="password" placeholder="entrez votre mot de passe" name="password" required >
          </div>
          
        </div>
        <div class="button" >
          <input type="submit" value="Soumettre" name="submit">
        </div>
        <div>
                <?php   echo '<p style="color: red; text-align: center">'.$msg.'
      
      </p>';
?>
        </div>
       <hr/>
       <div class="buttons">
       <div class="button2" >
        <input type="button" value="Mot de passe oublié?" id="passwordicon" onclick="window.location.href = 'forgot.php'" >
      </div>
      <div class="button3" >
        <input type="button" value="nouveau Compte?" onclick="window.location.href = '../signup/index1.php'">
      </div>
      
      </div>
      </form>
    </div>
    </div>
    <div class="recuperer">
    </div>

    <!-- --------------------- Footer section -->
    <div class="footer">
        <div class="f1">
          <p class="p1">Get connected with us on social media</p>
          <div>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-pinterest"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-snapchat-ghost"></a>
            <a href="#" class="fa fa-skype"></a>
          </div>
        </div>
        <div class="line"></div>
        <div class="f2">
          <div class="div1">
            <p class="headfooter">&#127892; SHIFAE MED</p>
            <p>About Us</p>
            <p>Our Services</p>
            <p>Privacy Policy</p>
            <p>Affiliate Program</p>
          </div>
          <div class="div1">
            <p class="headfooter">GET HELP</p>
            <p>FAQ</p>
            <p>Shipping</p>
            <p>Returns</p>
            <p>Feedback</p>
          </div>
          <div class="div1">
            <p class="headfooter">USEFUL LINKS</p>
            <p>Information</p>
            <p>Seetings</p>
            <p>Help</p>
            <p>More</p>
          </div>
          <div class="div1 dernier">
            <p class="headfooter">CONTACT</p>
            <p>&#128392; Oujda elqodss 05 ,maroc</p>
            <p>&#128388; shifae@gmail.com</p>
            <p>&#128381; 0536643421</p>
            <p>&#128389; 0567438933</p>
          </div>
        </div>
        <div class="copyright">
          <p>&copy; 2022 Copyright Shifaemed.com</p>
        </div>
      </div>
    <script src="script.js"></script>
  </body>
</html>