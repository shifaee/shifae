
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/png" href="logo.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" type="image/png" href="img/Layer 1.png" />
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
    <title>Se connecter à Shifae|Espace medecin</title>
  </head>
  <body>
    <!-------------------  NAV SECTION ---------------------->
    <nav>
      <input type="checkbox" id="check" />
      <label for="check" class="checkbtn"> <i class="fa fa-bars"></i></label>
      <label class="logo"
        ><img class="imglogo" src="./images/logofinal.png" alt=" img "
      /></label>
      <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="index1.php">Sign up</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">About </a></li>
        <li><a href="#">Contact us</a></li>
      </ul>
    </nav>
    <!--The container section-->
    
   <div class="login-container">
       <div class="contenu ">
        <h3>Vous avez oublié votre mot de passe?</h3>
        <p class="precup"> Pour réinitialiser votre mot de passe ,saisissez l'adresse e-mail que vous utilizer pour vous connecter à votre compte Shifae . Il peut s'agir de votre adresse Gmail ou Google Apps , ou d'une autre adresse e-mail que vous avez associée à votre compte.</p>
        <label for="" class="precup">Adresse e-mail</label></br>
        <input type="email" name="recupemail" class="emailreup" placeholder="votre adresse e-mail" required>
</br>
        <input type="submit" name="subrecup" value="ENVOYER" class="envoyerforget" onclick="window.location.href = 'envoyer.php'">
</br>
<p>Si vous ne possédez pas encore de compte Shifae .vous pouvez en  <a href="">&nbsp; créer un maintenant.</a></p>
       </div>

   </div>

    <!-- --------------------- Footer section -->
    <footer>
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
          <p class="headfooter">&#127892; SHIFAE</p>
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
        <p>&copy; 2022 Copyright Shifae.com</p>
      </div>
    </div>
    </footer>
    <script src="script.js"></script>
  </body>
</html>