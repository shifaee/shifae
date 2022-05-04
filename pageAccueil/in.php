<?php include('cnx.php');
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" type="image/png" href="./images/Layer 1.png" />
    <title>Shifae</title>
    <!--Custom style-->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="styleshhet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/aos.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
   
<body>
    <!-------------------  NAV SECTION ---------------------->
     <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn" > <i class="fa fa-bars"></i></label>

     <div class="wrapping">
     <img class="petit" src="./images/Layer 1.png" alt=" img2 " />
        <label class="name">Shifae</label>
      </div>
     <ul>
         <li><a href="in.php" class="active  ">Accueil</a></li>
         <li><a href="../signIn/signIn.php">Se connecter</a></li>
         <li><a href="#blogs">Services</a></li>
         <li><a href="../about"> À propos </a></li>
         <li><a href="../contactus/contact.php">Contact</a></li>

     </ul>
     
     </nav>  


    <!---------X----------  NAV SECTION --------------X-------->

    <!------------------------MAIN SECTION-------------------->
    
        <!-- <section class="site-title">
        </section> -->
        <section class="home" id="home">
            <div class="site-title">
            <div class="box">
                <div class="text">
                    <h1>
                        Rendez-vous ,   controle medical en ligne, espace medecin</h1>
                        <h2 class="h2">SHIFAE 
                            <p> RDV & Tééconsultation avec </br> &nbsp; vos prfessionnels de santé</p>
                        </h2>
                        <!-- <p></p> -->
                        <!-- <button >Voir plus</button> -->
                </div>
            </div> 
            <form action="../page/index.php" class="boxes" method="post" enctype="multipart/form-data">
                <div class="box1">
                <label for="cars"></label>
                <select id="cars" name="ville">
                    <option value='fa-map-o'>  Ville</option>
                    <option value="Ahfir">Ahfir</option>
                  <option value="Al Aroui">Al Aroui</option>
                  <option value="Beni Ensar">Beni Ensar</option>
                  <option value="Berkane">Berkane</option>
                  <option value="Bni Drar">Bni Drar</option>
                  <option value="Nador">Nador</option>
                  <option value="Saidia">Saidia</option>
                  <option value="Oujda">Oujda</option>
                </select>
                </div>
                <div class="box2">
                <label for="cars"></label>
                <select id="cars" name="specialite">
                  <option value="Specialiste/generaliste">  Specialiste/generaliste</option>
                  <option value="generaliste">generaliste</option>
                  <option value="Endocrinologie">Endocrinologie</option>
                  <option value="Cardiologie">Cardiologie</option>
                  <option value="Dermatologue">Dermatologue</option>
                  <option value="Gastro-entérologue">Gastro-entérologue</option>
                  <option value="chimiothérapie">chimiothérapie </option>
                  <option value="Pédiatre">Pédiatre</option>
                </select>
                </div>
                <div class="box2">
                    <label for="cars"></label>
                    <select id="cars" name="cars">
                      <option value="volvo ">   Type de prise </option>
                      <option value="volvo">rendez-vous au cabinet</option>
                      <option value="saab">rendez-vous a domicile</option>
                      <option value="fiat">controle medical en ligne</option>
                    </select>
                    </div>
                 <div class="date">  
                <label for="birthday"></label>
                <input type="date" id="date" name="birthday"></div>
                <div class="sub"><button name="search"style="margin-bottom : 1px"><i class=" search fa-solid fa-magnifying-glass" ></i></button></div>
                <!-- <input type="submit" id="sub" value="chercher" onclick="goHome()"> -->
            </div>
        </form>
            </div>
        </section>

    
<!-------------------------Blog Carosel--------------------->
<div class="vide"></div>
 <section>
    
    <div class="blog">
        <div class="container">
            <div id ="blogs" class="container-blog-carousel ">
                
                <div class="blog-content" data-aos="fade-right" data-aos-delay="200" >
                    <img src="./assets/Blog-post/360.png" alt="post-1">
                    <div class="blog-title">
                        <h3>Un espace qui réunit les meilleurs médecins généralistes et spécialistes</h3>
                       <a href="https://blogs.webmd.com/webmd-doctors/default.htm" target="_blank"  onclick="window.location.href = '../signIn/signIn.php'"> <button class="btn btn-blog">Voir plus</button></a>
                        <span>dernière modificaton  2 minutes </span>
                    </div>
                </div>
              
                <div class="blog-content"  data-aos="fade-in" data-aos-delay="200" >
                    <img src="./assets/Blog-post/220.png" alt="post-1">
                    <div class="blog-title">
                        <h3>un espace   qui vous offre la possibilié de prendre un rendez-vous  médical virtuel</h3>
                        <button class="btn btn-blog"  onclick="window.location.href = '../pageAccueil/in.php'" >Voir plus</button>
                        <span>dernière modificaton  1 minutes</span>
                    </div>
                </div>

                <div class="blog-content" data-aos="fade-left" data-aos-delay="200"  >
                    <img src="./assets/Blog-post/240.png" alt="post-1">
                    <div class="blog-title">
                        <h3>Prenez vos rendez-vous en toute simplicité et sans vous déplacer  </h3>
                        <button class="btn btn-blog" onclick="window.location.href = '../pageAccueil/in.php'">Voir plus</button>
                        <span>dernière modificaton  8 minutes</span>
                    </div>
                </div>
           
               
            </div>
            
        </div>
    </div>




</div>




<!---------X---------------Blog Carosel------------X-------->



<!--------------------------Site Content-------------------->
<section class="container">
    <div class="site-content">
        <div class="posts">
            <div class="post-content" data-aos="zoom-in" data-aos-delay="200" >
                <div class="post-image">
                    <div>
                        <img src="./assets/Blog-post/pexels-billow-4515033.png" class="img" alt="blog1">
                    </div>
                    <div class="post-info flex-row">
                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Ahmed toufiq</span>
                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Mars ,20,2022</span>
                        <span>40 commentaires</span>
                    </div>
                </div>
                <div class="post-title">
                    <a href="https://www.cerballiance.fr/fr/blog" target="_blank">Le laboratoire Moderna va développer des vaccins contre des virus négligés</a>
                    <p>La biotech veut établir une bibliothèque de vaccins contre quinze agents pathogènes, qui, en cas d’émergence d’une pandémie, seront prêts à être dégainés et à entrer en phase 3 d’essais cliniques...

                    </p>
                    <button class="btn post-btn">Lire plus &nbsp;<i class = "fas fa-arrow-right"></i></button>
                </div>
            </div>
            <hr>
            <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                <div class="post-image">
                    <div>
                        <img src="./assets/Blog-post/sexels-billow-4515033.png" class="img" alt="blog1">
                    </div>
                    <div class="post-info flex-row">
                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Nawal el mrnissi</span>
                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Janvier ,25 ,2022</span>
                        <span>7 commentaires</span>
                    </div>
                </div>
                <div class="post-title">
                    <a href="https://www.cdc.gov/coronavirus/2019-ncov/variants/omicron-variant.html" target="_blank">Le variant Omicron va-t-il nous conférer une super-immunité?</a>
                    <p>La vague Omicron n’en finit pas de déferler sur la planète. Ce variant est si transmissible qu’il peut aussi bien infecter les personnes vaccinées que celles qui ne le sont pas, même s’il provoque des formes moins graves. Mais il semble bien qu’une stimulation répétée renforcerait notre système immunitaire. Le point en six questions  </p>
                    <button class="btn post-btn">Lire plus &nbsp;<i class = "fas fa-arrow-right"></i></button>
                </div>
            </div>
            <hr>
            <div class="post-content"data-aos="zoom-in" data-aos-delay="200">
                <div class="post-image">
                    <div>
                        <img src="./assets/Blog-post/file7j4warpoqw681af6mrb.png" class="img" alt="blog1">
                    </div>
                    <div class="post-info flex-row">
                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Ahmed Aziz</span>
                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Mars ,20 ,2022</span>
                        <span>5 commentaires</span>
                    </div>
                </div>
                <div class="post-title">
                    <a href="http://www.femmes-et-mamans.com/" target="_blank">Les doulas concourent à faire rimer (future) maternité avec sérénité</a>
                    <p>Elles ne sont ni des sages-femmes, ni des amies des futurs parents, mais elles accompagnent au plus près les grossesses, accouchements et périodes post-partum: les doulas reviennent sur le devant de la scène pour «réhumaniser» la maternité</p>
                    <button class="btn post-btn">Lire plus &nbsp;<i class = "fas fa-arrow-right"></i></button>
                </div>
            </div>
            <hr>
            <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                <div class="post-image">
                    <div>
                        <img src="./assets/Blog-post/file6r5njlinda88bjhfmha.png" class="img" alt="blog1">
                    </div>
                    <div class="post-info flex-row">
                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Salma mouaafi</span>
                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Aout ,21 ,2022</span>
                        <span>12 commentaires</span>
                    </div>
                </div>
                <div class="post-title">
                    <a href="https://www.everydayhealth.com/columns/a-therapist-speaks/what-you-should-know-before-starting-therapy/" target="_blank">En thérapie, avec des auteurs de violences domestiques</a>
                    <p>C’est un groupe de parole confidentiel, tenu en général à l’abri des regards. Le Service des auteur·e·s de violence conjugale, à Neuchâtel, nous a ouvert ses portes, un soir, avec l’accord de ses participants. Un accès rare aux rouages de cet outil de prévention</p>
                    <button class="btn post-btn">Lire plus &nbsp;<i class = "fas fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="pagination flex-row">
                <a href="#" ><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="pages">1</a>
                <a href="#" class="pages">2</a>
                <a href="#" class="pages">3</a>
                <a href="#" class="pages">4</a>
                <a href="#"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        <aside class="side-bar">
                <div class="category">
                    <h2>Catégories</h2>
                    <ul class="category-list">
                        <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                            <a href="https://www.everydayhealth.com/emotional-health/what-is-75-hard-and-can-it-make-over-your-mental-toughness/" target="_blank">Santé</a>
                            <span>(05)</span>
                        </li>
                        <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                            <a href="https://www.oolution.com/blogs/soin-de-la-peau" target="_blank">Soin </a>
                            <span>(02)</span>
                        </li>
                        <li class="list-items" data-aos="fade-left" data-aos-delay="300">
                            <a href="https://medicament.ma/" target="_blank">Medicament</a>
                            <span>(07)</span>
                        </li>
                        <li class="list-items" data-aos="fade-left" data-aos-delay="400">
                            <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019" target="_blank">covid</a>
                            <span>(08)</span>
                        </li>
                        <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                            <a href="https://www.everydayhealth.com/" target="_blank">Régime</a>
                            <span>(01)</span>
                        </li>

                    </ul>
                </div>
                <div class="popular-post">
                    <h2>Populaire publications</h2>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/popular-post/0033e13_864918490-onward_0.png" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Rime hassani Idrissi</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Janvier ,30 ,2022</span>
                                <span>10 commentaires</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="https://www.success.com/blog/" target="_blank">Onward ou la marche vers le succès</a>
                            
                        </div>
                    </div>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                        <div class="post-image">
                            <div>
                                <img src="./assets/popular-post/a80fa08_646623578-500357225-highres.png" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Chaimaa el beqqal</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;février ,18 ,2022</span>
                                <span>6 commentaires</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="https://www.sgu.edu/blog/medical/top-medical-blogs/" target="_blank">Les médecins vaudois s’invitent dans la campagne électorale</a>
                            
                        </div>
                    </div>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                        <div class="post-image">
                            <div>
                                <img src="./assets/popular-post/3c1a937_900009432-infertilite.png" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Ghizlane Kassimi</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Mars ,31 ,2022</span>
                                <span>6 commentaires</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="https://www.success.com/im-learning-that-i-can-do-hard-things/" target="_blank">«La parole se libère aussi sur l’infertilité»</a>
                            
                        </div>
                    </div>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                        <div class="post-image">
                            <div>
                                <img src="./assets/popular-post/8a3144b_doc7k1820ftliba16cblei.png" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Meryem Tahir</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Janvier ,02 ,2020</span>
                                <span>5 commentaires</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="https://www.femmeapart.com/le-blog/" target="_blank">Mieux prendre en compte la santé des femmes sous-représentées dans les essais cliniques</a>
                            
                        </div>
                    </div>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                        <div class="post-image">
                            <div>
                                <img src="./assets/popular-post/6d71d71_776088918-adobestock-53535208_0.png" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Chorouk el boujdaini</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Juillet ,09 ,2021</span>
                                <span>60 commentaires</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="https://health.clevelandclinic.org/" target="_blank">Le patient, ce grand oublié</a>
                            
                        </div>
                    </div>
                </div>
                <div class="newsletter" data-aos="fade-up" data-aos-delay="300">
                    <h2> Voulez vous reçevoir tous les postes ! Abonnez-vous </h2>
                    <div class="form-element">
                        <input type="text" class="input-element" placeholder="Email">
                        <button class="btn form-btn">S'abonner</button>
                    </div>
                </div>
                <div class="popular-tags">
                    <h2 >Tags populaires </h2>
                     <div class="tags flex-row">
                         <span class="tag" data-aos="flip-up" data-aos-delay="100">Santé</span>
                         <span class="tag" data-aos="flip-up" data-aos-delay="200">Monde</span>
                         <span class="tag"  data-aos="flip-up" data-aos-delay="300">Régime</span>
                         <span class="tag" data-aos="flip-up" data-aos-delay="400">lifeStyle</span>
                         <span class="tag"data-aos="flip-up" data-aos-delay="500">Covid</span>
                         <span class="tag" data-aos="flip-up" data-aos-delay="600">Patient</span>
                         <span class="tag" data-aos="flip-up" data-aos-delay="700">Medicament</span>
                     </div>
                </div>
        </aside>
        
    </div>
</section>
<div class="footer">
    <div class="f1">
    <p class="p1">Get connected  with us on social media</p>
    <div>
    <a href="https://www.facebook.com" target="_blank" class="fa fa-facebook"></a>  
    <a href="https://www.twitter.com" target="_blank" class="fa fa-twitter"></a>  
    <a href="https://www.pinterest.com" target="_blank"  class="fa fa-pinterest"></a>  
    <a href="https://www.linkedin.com" target="_blank"  class="fa fa-linkedin"></a>  
    <a href="https://www.instagram.com" target="_blank"  class="fa fa-instagram"></a>  
    <a href="https://www.youtube.com" target="_blank"  class="fa fa-youtube"></a>  
    <a href="https://www.google.com" target="_blank"  class="fa fa-google"></a>  
    <a href="https://www.snapchat.com" target="_blank"  class="fa fa-snapchat-ghost"></a>  
    <a href="https://www.skype.com" target="_blank"  class="fa fa-skype"></a> 
    </div>
    </div> 
    <div class="line"></div>
    <div class="f2">
        <div class="div1">
            <p class=" headfooter">&#127892;  SHIFAE MED</p>
            <p>About Us</p>
            <p>Our Services</p>
            <p>Privacy Policy</p>
            <p>Affiliate Program</p>
        </div>
        <div class="div1">
            <p class="headfooter"> GET HELP</p>
            <p>FAQ</p>
            <p>Shipping</p>
            <p>Returns </p>
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
            <p>&#128392;   Oujda elqodss 05 ,maroc</p>
            <p>&#128388;   shifae@gmail.com</p>
            <p>&#128381;   0536643421</p>
            <p>&#128389;   0567438933</p>



        </div>
    </div>
    <div class="copyright">
        <p>&copy; 2022 Copyright Shifae.com</p>
    </div>
</div>

<!---------X----------------Site Content-----------X-------->




    <!---------X---------------MAIN SECTION------------X-------->
  




    <script src="./js/Jquery3.6.0.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/aos.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>