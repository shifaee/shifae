<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="contact.css" />
    <link rel="icon" type="image/png" href="logo.png" />
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
    <title>Contact|shifae</title>
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
          <li><a href="../signIn/signIn.php">Se connecter</a></li>
          <li><a href="../pageAccueil/in.php #blogs">Services</a></li>
          <li><a href="../about/index.html">À propos</a></li>
          <li><a href="../contactus/contact.php">Contact</a></li>
        </ul>
      </nav>
    <!--The container section-->
    
   <div class="login-container">
       <div class="contenu ">
       <h2 class="title1">Contactez-nous</h2>
       <?php 
            $Msg="";
            if(isset($_GET['sucess'])){
                $Msg = "Votre message à été envoyé!";
                echo '<div class="">'.$Msg.'</div>';

            }

        ?>
        <form action="process.php" method="POST">
            <div class="inputs">
            <input type="text" name="fullname" class="input" placeholder="Entrez votre nom" required >
            <input type="text" name="adresse" class="input" placeholder="Entrez votre email" required >
            <input type="text" name="msg" class="input inputmsg" placeholder="Entrez votre message" required>
            <input type="submit" name="envmsg" value="Envoyer" class="envoyerforget sub2">
            </div>

            <p class="textx ">Contactez-nous | numéro de téléphone: +212643121320
            </p>
        </form>
       </div>

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
          <p>&copy; 2022 Copyright Shifae.com</p>
        </div>
      </div>
    <script src="script.js"></script>
  </body>
</html>