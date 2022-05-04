
<?php 
session_start();
 $prenom = "";
 $email = "";
//  $errors = array();

 //connect to database
$host = "localhost";
$user ="root";
$pw = "";
$ndb = "shifae";
$con = mysqli_connect($host,$user,$pw,$ndb);
 
//si on a clique sur le botton s'inscrire
if(isset($_POST['register'])) {
    
    $prenom = $_POST['prenom'];
    $specialite = $_POST['specialite']; 
    $numportable = $_POST['numportable']; 
    $numcabinet = $_POST['numcabinet']; 
    $ville = $_POST['ville'];  
    $date = $_POST['date'];
    $email = $_POST['email']; 
    $password = $_POST['password']; 
    $nom = $_POST['nom']; 
    $gender=$_POST['ab'];
    $adress = $_POST['adress'];


    //if there no errors save user to database
    
        $sql = " INSERT INTO medecin (gmail,password,nom,prenom,specialite,datenaissance,numportable,numcabinet,genre,localisation,ville) VALUES ('$email','$password','$nom','$prenom','$specialite','$date','$numportable','$numcabinet','$gender','$adress','$ville')" ;
          mysqli_query($con,$sql);
        $sq= mysqli_query($con,"select * from medecin where gmail='$email' && password='$password'");
          $row=mysqli_fetch_assoc($sq);
          $_SESSION['USER_ID']=$row['id'];
        $_SESSION["email"]=$email;
        // $_SESSION["nom"]= $nom;
        $_SESSION["prenom"] = $prenom;
        $_SESSION["gender"]=$gender;
        $_SESSION["specialite"]=$specialite;
        $_SESSION["ville"]=$ville;
        $_SESSION["localisation"]=$adress;
        

        
        

}
?>