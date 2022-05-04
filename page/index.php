<?php 
session_start();
header("Cache-Control: no cache");
// session_cache_limiter("private_no_expire");
include('../pageAccueil/cnx.php'); 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/stylePage.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap"
      rel="stylesheet"
    />
    <script src="script.js" defer></script>
    <!--------------------- navBar -------------------------->
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/stylePage.css" type="text/css" />
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
    <title>Prenez un RDV</title>
  </head>
  <body>
    <!-------------------  NAV SECTION ---------------------->
    <nav>
      <input type="checkbox" id="check" />
      <label for="check" class="checkbtn"> <i class="fa fa-bars"></i></label>
      <div class="wrapping">
        <!-- <img class="imglogo" src="assets/img/logoshifae.png" alt=" img " /> -->
        <img class="petit" src="assets/img/logo.png" alt=" img2 " />
        <label class="name">Shifae</label>
      </div>

      <ul>
        <li><a href="../pageAccueil/in.php" class="active">Accueil</a></li>
        <li><a href="../signIn/signIn.php">Se connecter</a></li>
        <li><a href="../pageAccueil/in.php #blogs">Services</a></li>
        <li><a href="#">À propos </a></li>
        <li><a href="../contactus/contact.php">contact</a></li>
      </ul>
    </nav>
    <!------------------- END-OF- NAV SECTION ---------------------->
      <!---------------- SEARCHING SECTION ---------------->
    <div class="holder">
      <h2>Médecins disponibles</h2>
    <div class="section">
    <!---------------- DOCTORS SECTION ---------------->
   
      <?php 
     
      
      if(isset($_POST['search'])){
          $query="SELECT * FROM medecin WHERE specialite='$_POST[specialite]' AND ville='$_POST[ville]'";
          $result= mysqli_query($con,$query);
          $queryResults = mysqli_num_rows($result);
          if ($queryResults > 0)
          {
           echo' <div class="doctors">';
           
            while($row=mysqli_fetch_array($result))
            { 
              
             if ("$row[genre]"=='femme')
              $gender='Mme';
              else
              $gender='Mr';
              echo"
                  <div class='doctor'>
                  ";
                 
			 	echo'<img id="profil" src = "data:image/jpg;base64,' . base64_encode("$row[photo]") . '" />';
                 $docId = "$row[id]";
                //  $_SESSION['medecin'] = $docId;
                echo "
                <div class='info'>
                 <h3 id='name'>$gender . $row[nom] $row[prenom]</h3>
                  <p id='specilaite'>$row[specialite]</p>
                  <p id='location'>$row[ville],$row[localisation]</p>
                  <form action='../admin_finale/doctor.php' method='get'>
                  <button type='submit' value='$docId' id='rdv' name='$docId' onsubmit='return false;'>Prendre un RDV</button>
                 
                 </div>";
               
                 if(isset( $_GET[$docId])){
                  $_SESSION['medecin'] = $docId;
                }
                
                  echo '<div class="calendar">
          <p><span id="week">Lun - Ven</span> &nbsp;<span id="sam">Sam</span> </p>
          <p class="horaire"><i class="fa-solid fa-sun-bright"></i><span>09:00 - 12:00</span><span> 09:00 - 12:00 </span></p>
          <p class="horaire"><i class="fa-solid fa-cloud-moon"></i><span>14:00 - 15:00 </span><span> ----- - -----</span></p>
         </div>
         <div class="smallCalend">
          <p>Disponible 5/7j</p>
        </div>';
              
        echo'</div>';
            }
            echo'</div>';
          }
          else
          echo "<p>Non résultats trouvées</p>";
          
      }?> 
        

      
   
      <!---------------- MAP SECTION ---------------->
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d74235.57806044545!2d-1.95614986391406!3d34.685500523129285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7864984106d6ef%3A0x1d86b33244c4650!2sOujda!5e0!3m2!1sen!2sma!4v1649825237674!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
      </div>
     </div>
     </div>

      <!-------------------END SECTION ---------------->
    <!-- </div>

    </div>  -->
  


    <!-- --------------------- Footer section -->
    <div class="footer" style="  height: 50vh;
    background-color: #aeeee8cc;
    padding-top:20px ;">
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
  </body>
</html>
