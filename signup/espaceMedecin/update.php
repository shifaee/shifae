<?php 

// $email = $_SESSION ['email'];

if(isset($_POST["submit"])){
    $uimageData = mysqli_real_escape_string($con, (file_get_contents($_FILES['img']['tmp_name'])));

    $quer = "UPDATE medecin set photo ='$uimageData',bio = '$_POST[bio]' WHERE id= '$id'" ;
    
    mysqli_query($con,$quer);
       
}
if(isset($_POST["sub"])){

    $queri = "UPDATE medecin set specialite ='$_POST[specia]',sym1 = '$_POST[symp1]',sym2 = '$_POST[symp2]',sym3 = '$_POST[symp3]' WHERE id= '$id'" ;
    
    mysqli_query($con,$queri);
}

if(isset($_POST["submit1"])){

    $queri1 = "UPDATE medecin set experience ='$_POST[experience]' WHERE id= '$id'" ;
    
    mysqli_query($con,$queri1);
    
}
if(isset($_POST["submit2"])){

    $queri1 = "UPDATE medecin set description ='$_POST[description]' WHERE id= '$id'" ;
    
    mysqli_query($con,$queri1);
    
}
// tarif à domicile
if(isset($_POST["enre1"])){

    $queri2 = "UPDATE medecin set tarifdom ='$_POST[tarifdom]' WHERE id= '$id'" ;
    
    mysqli_query($con,$queri2);
}
// 
if(isset($_POST["enre2"])){

    $queri3 = "UPDATE medecin set tarifcabinet ='$_POST[tarifcabinet]' WHERE id= '$id'" ;
    mysqli_query($con,$queri3);
}
// 
if(isset($_POST["enre3"])){

    $queri4= "UPDATE medecin set tarifenligne ='$_POST[tarifenligne]' WHERE id= '$id'" ;

    mysqli_query($con,$queri4);
}

// $adress0 = "SELECT localisation FROM  medecin  WHERE id= 3 ";
// $adress1 = "SELECT ville FROM  medecin  WHERE id= 3 ";
// $adress= "maroc".$adress1." ".$adress0;
// $adressGps = str_replace("", "+" , $adress);
?>

<!-- '$_POST[date]', -->