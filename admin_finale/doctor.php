<?php
    session_start();
	header("Cache-Control: no cache");
	include("connexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/Layer 1.png" />
	<!-- Boxicons -->
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link href="style.css" rel="stylesheet" />

	<title>Espacemedecin</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="img/Layer 1.png" alt="" class="img"/>
			<span class="text">Shifae</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#info">
					<i class='bx bxs-dashboard' ></i>
					
					<span class="text">À propos </span>
				</a>
			</li>
			<li>
				<a href="#specia">
					<i class='bx bx-task'></i>				
						<span class="text">Specialité</span>
				</a>
			</li>
			<li>
				<a href="#experience">
					<i class='bx bx-spreadsheet'></i>			
							<span class="text">Expérience</span>
				</a>
			</li>
			<li>
				<a href="#description">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Description</span>
				</a>
			</li>
			<li>
				<a href="#lieux">
					<i class='bx bxs-map'></i>			
					<span class="text">Accès</span>
				</a>
			</li>
			<li>
				<a href="#tarif">
					<i class='bx bxs-badge-dollar'></i>		
								<span class="text">Tarif</span>
				</a>
			</li>
			<li>
				<a href="#rend">
					<i class='bx bx-time'></i>
					<span class="text">Horaire et Contact</span>
					
				</a>
			</li>
		</ul>
	
		
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Catégorie</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Chercher...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title" id="info">
				<div class="left">
					<h1>À propos</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Info</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Accueil</a>
						</li>
					</ul>
				</div>
				
			</div>

			<ul class="box-info">
				<li>
				<?php
				// print_r($_GET);
				$idMedecin = array_pop($_GET);
				$result = mysqli_query($con,"SELECT * FROM medecin WHERE id ='$idMedecin'");
				$row = mysqli_fetch_assoc($result);
				$queryResults = mysqli_num_rows($result);
				// echo "$row[id]";
				// print_r($result);
				 echo'<img class="profile" src = "data:image/jpg;base64,' . base64_encode("$row[photo]") . '" width = "162px" height = "147px"/>';	 		
				?>
				<span class="text">
					<h3>
					<?php 
						
                        if($row["genre"]=="femme"){
                            echo "Mme "." ".$row["nom"]." ".$row["prenom"];
                        }
                        else{
                            echo "Mr ".$row["nom"]." ".$row["prenom"];
                        }
					
					?>
					</h3>
					<p> 
					<?php 
                           echo $row["specialite"];
						  
                       ?></p>
					   
				</span>
			</li>
				
			</ul>


			<div class="table-data">
				<div class="order" id="specia">
					<div class="head">
						<i class='bx bx-task'></i>	
						<h3> Spécialités & Etats de santé </h3>
						
					</div>
					<div class="div-spec">
					<div class="spec etat "> 
						<h5>
							 <?php echo $row["specialite"];?> 
						</h5>
					</div>
	 
					<div class="a"></div>
					<div class="spec "> <h5> Rhinite  </h5></div>
					<div class="spec "> <h5> Branchite</h5></div>
					<div class="spec "> <h5> Infection </h5></div>
					<div class="spec "> <h5> Grippe</h5></div>
					<div class="spec "> <h5> Constipation</h5></div>
					<div class="spec "> <h5> La toux</h5></div>
					<div class="spec "> <h5> Fiévre </h5></div>
					<div class="spec "> <h5> Gale</h5></div>

					</div >
					<!-- <i class='regler bx bxs-cog' ></i> -->
					<?php
					$adress0 = "$row[localisation]";
					
					$adress1 = "$row[ville]";
					
					$adress= "maroc ".$adress1." ".$adress0;
					$adressGps = str_replace("", "+" , $adress);
					?>
					<iframe src="https://maps.google.com/maps?&q=<?php echo $adressGps; ?>&output=embed " width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				
				</div>
				<div class="todo" id="lieux">
					<div class="card">
						<div class="card-inner">
						  <div class="card-front">
							<div class="card-content">
								<div class="tab">
									<p class="shifae">Shifae</p>
							        <p class="RDV">Prendre un rendez-vous</p>
							</div>
						  </div>
						  </div>
						  <div class="card-back">
							<div class="card-top">
							  
								  <?php echo'<img class="profile" src = "data:image/jpg;base64,' . base64_encode("$row[photo]") . '" width = "162px" height = "147px"/>';	 		?>
							  
							</div>
							<p>
								<?php
									if($row["genre"]=="femme"){
										echo "Mme "." ".$row["nom"]." ".$row["prenom"];
									}
									else{
										echo "Mr ".$row["nom"]." ".$row["prenom"];
									}
								?>
							</p>
							
							<div class="card-icons">
								
							  <a href="#modalbox" >
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.6 483.2 483.9 512 448.5 512H128.1C92.75 512 64.09 483.3 64.09 448V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5H575.8zM328 232V176C328 167.2 320.8 160 312 160H264C255.2 160 248 167.2 248 176V232H192C183.2 232 176 239.2 176 248V296C176 304.8 183.2 312 192 312H248V368C248 376.8 255.2 384 264 384H312C320.8 384 328 376.8 328 368V312H384C392.8 312 400 304.8 400 296V248C400 239.2 392.8 232 384 232H328z"/></svg>
							  </a>
							  <a href="#modalbox2" >
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M192 48C192 21.49 213.5 0 240 0H400C426.5 0 448 21.49 448 48V512H368V432C368 405.5 346.5 384 320 384C293.5 384 272 405.5 272 432V512H192V48zM312 64C303.2 64 296 71.16 296 80V104H272C263.2 104 256 111.2 256 120V136C256 144.8 263.2 152 272 152H296V176C296 184.8 303.2 192 312 192H328C336.8 192 344 184.8 344 176V152H368C376.8 152 384 144.8 384 136V120C384 111.2 376.8 104 368 104H344V80C344 71.16 336.8 64 328 64H312zM160 96V512H48C21.49 512 0 490.5 0 464V320H80C88.84 320 96 312.8 96 304C96 295.2 88.84 288 80 288H0V224H80C88.84 224 96 216.8 96 208C96 199.2 88.84 192 80 192H0V144C0 117.5 21.49 96 48 96H160zM592 96C618.5 96 640 117.5 640 144V192H560C551.2 192 544 199.2 544 208C544 216.8 551.2 224 560 224H640V288H560C551.2 288 544 295.2 544 304C544 312.8 551.2 320 560 320H640V464C640 490.5 618.5 512 592 512H480V96H592z"/></svg>
							  </a>
							  <a href="#modalbox3">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"/></svg>
							  </a>
							</div>
								</div>
						  
						</div>
					</div>
			</div>
		    
			<div class="table-data">
				<div class="order " id="experience">
					<div class="head">
						<i class='bx bx-spreadsheet'></i>
						<h3>Expérience</h3>
						
					</div>
					<div class="experience">
						<ul>
						<p>
                            <?php echo $row["experience"];?>
                        </p>
						</ul>

					</div>
				</div>
				</div>
				<div class="table-data">
					<div class="order" id="description">
						<div class="head">
							<i class='bx bxs-message-dots' ></i>
							<h3>Description </h3>
							
						</div>
						<div>
						<?php echo $row["description"];?>
						</div>
						
					</div>
					</div>
					<div class="table-data">
						<div class="order" id="tarif">
							<div class="head">
								<i class='bx bxs-badge-dollar'></i>	
								<h3>Tarif</h3>
								
							</div>
							<table>
								<thead>
									<tr>
										<th >Type de consultation </th>
										<th>Prix</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											
											<p>Consultation à domicile </p>
										</td>
										<td><?php echo $row["tarifdom"];?></td>
										
									</tr>
									<tr>
										<td>
											<p>Consultation au cabinet</p>
										</td>
										<td><?php echo $row["tarifcabinet"];?></td>
										</tr>
									<tr>
										<td>
											
											<p>Consultation en ligne</p>
										</td>
										<td><?php echo $row["tarifenligne"];?> </td>
									
									</tr>
									
								</tbody>
							</table>
						</div>
						</div>
			<!-- rendez-vous -->
			<div class="table-data">
				<div class="order" id="rend">
					<div class="head">
						<i class='bx bx-time'></i>
						<h3>Horaire et Contact</h3>
						
					</div>
					<table>
						<tr>
							<td colspan="3">Lundi</td>
							<td>09:00-12:15/14:00-17:00</td>
						</tr>
						<tr>
							<td colspan="3">Mardi</td>
							<td>09:30-12:45/14:00-17:15</td>
						</tr>
						<tr>
							<td colspan="3">Mercredi</td>
							<td>08:45-12:15/13:30-17:00</td>
						</tr>
						<tr>
							<td colspan="3">Jeudi</td>
							<td>09:00-12:15/14:00-17:00</td>
						</tr>
						<tr>
							<td colspan="3">Vendredi</td>
							<td>09:00-12:15/14:00-17:00</td>
						</tr>
						<tr>
							<td colspan="3">samedi</td>
							<td>09:00-12:15</td>
						</tr>
						
					</table>
				</div>
				</div>
		</main>


	
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	

	<script src="script.js"></script>
	<!--dialog box-->
	<div id="modalbox" class="modal" style="padding-top:50px">
		<div class="modalcontent">
			<table>
				<tr>
				<td class="hh"><svg class="homeicon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.6 483.2 483.9 512 448.5 512H128.1C92.75 512 64.09 483.3 64.09 448V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5H575.8zM328 232V176C328 167.2 320.8 160 312 160H264C255.2 160 248 167.2 248 176V232H192C183.2 232 176 239.2 176 248V296C176 304.8 183.2 312 192 312H248V368C248 376.8 255.2 384 264 384H312C320.8 384 328 376.8 328 368V312H384C392.8 312 400 304.8 400 296V248C400 239.2 392.8 232 384 232H328z"/></svg></td><td colspan="2"><h1>À DOMICILE</h1></td>
				</tr>
				
			</table>
			
			<table>
				<div class="table1">
				<tr style="top: 0;bottom: 0;">
					<td colspan="4">
							<?php 
								if($row["genre"]=="femme"){
									echo "Mme "." ".$row["nom"]." ".$row["prenom"];
								}
								else{
									echo "Mr ".$row["nom"]." ".$row["prenom"];
								}
							?></td>
					<!-- <td><img src="./img/prac.svg" class="imgdoc"></td> -->
				</tr>
				<tr><td colspan="4">Tarif:   <?php
									echo $row['tarifdom'];
								?>
								</td>
						</tr>
				</tr> </div>
				<?php 
				// error_reporting(E_ERROR|E_PARSE);
					// session_start();
					// include("connexion.php");
					$idMedecin = array_pop($_GET);
					if(isset($_POST["submit1"])){
						$nom =htmlspecialchars(trim(strtolower($_POST['nom'])));
						$prenom =htmlspecialchars(trim(strtolower($_POST['prenom'])));
						$email =htmlspecialchars(trim(strtolower($_POST['email'])));
						$age =htmlspecialchars(trim(strtolower($_POST['age'])));
						$cin =htmlspecialchars(trim(strtolower($_POST['cin'])));
						$tel =htmlspecialchars(trim(strtolower($_POST['tel'])));
						$adresse =htmlspecialchars(trim(strtolower($_POST['adresse'])));
						$consultationdom = true;
						$consultationcab = false;
						$consultationenligne = false;
						$idMedecin = $row['id'];
						$date = date('Y-m-d',strtotime($_POST['date']));
						$hour = $_POST['hour'];

						$query = "INSERT INTO rd(nom,prenom,email,age,cin,tel,adresse,consultationcab,consultationdom,consultationenligne,date,hour,idmedecin)
                        		  VALUES('$nom','$prenom','$email','$age','$cin','$tel','$adresse','$consultationcab','$consultationdom','$consultationenligne',
												'$date','$hour','$idMedecin')";
						$query_run = mysqli_query($con,$query);
						if($query_run){
							$_SESSION['status'] = "Time value inserted succefuly";
							
								// header("Location:#");
						}
						else{
							$_SESSION['status'] = "Time value not inserted";
							// header("Location:#");
						}
					}
				
				?>
			<form action="#" method = "post">
				<tr >
					<td colspan="8" style="text-decoration: underline;"}>Veuillez entrer vos coordonnées </td>
				</tr>
				<tr >
					<td style="padding-right: 25px;" ><div ><p>Nom</p></div><div> <input type="text" placeholder="entrez votre nom" name = "nom"  required></div></td>
					<td class = "form_margin"><div><p>Prénom</p></div> <div><input type="text" placeholder="entrez votre prénom" name = "prenom" required></div></td>
				</tr>
				<tr>
					<td><div><p>Email</p></div><div><input type="email" placeholder="entrez votre email" name = "email" required><div></td>
					<td><div><p>Age</p></div> <div><input type="text" placeholder="entrez votre age" name = "age"></div></td>
				</tr>
				<tr>
					<td><div><p>Cin</p></div> <div><input type="text" placeholder="entrez votre cin" name = "cin" required></div></td>
					<td><div><p>Tel </p></div><input type="text" placeholder="entrez votre tel" name = "tel" required></td>
				</tr>
				<tr>
					<td><div><p>Date </p></div><input type="date"  name = "date"></td>
					<td><div><p>Hour </p></div> <input type="time"  name = "hour"></td>
				</tr>
				
				<tr>
					<td style="padding-left:150px">Adresse</td>
				</tr>
				<tr>
					<td colspan="8" style="padding-left:150px"><input type="text" placeholder="entrez votre adresse" name = "adresse"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Confirmer" name = "submit1" class="confirm" style="height: 45px;
					margin :15px 0; margin-left : 50%; font-size:ghizlan"></td>
				</tr>
			</form>
			</table>
			<a href="#" class="modalclose">&times;</a>
		</div>
	</div>
			
	<!--dialog box 2-->
	<div id="modalbox2" class="modal2">
		<div class="modalcontent2">
		<table>
				<tr>
				<td class="hh"><svg class="homeicon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.6 483.2 483.9 512 448.5 512H128.1C92.75 512 64.09 483.3 64.09 448V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5H575.8zM328 232V176C328 167.2 320.8 160 312 160H264C255.2 160 248 167.2 248 176V232H192C183.2 232 176 239.2 176 248V296C176 304.8 183.2 312 192 312H248V368C248 376.8 255.2 384 264 384H312C320.8 384 328 376.8 328 368V312H384C392.8 312 400 304.8 400 296V248C400 239.2 392.8 232 384 232H328z"/></svg></td><td colspan="2"><h1>AU CABINET</h1></td>
				</tr>
				
			</table>
			
			<table>
				<div class="table1">
				<tr style="top: 0;bottom: 0;">
					<td colspan="4">
							<?php 
								if($row["genre"]=="femme"){
									echo "Mme "." ".$row["nom"]." ".$row["prenom"];
								}
								else{
									echo "Mr ".$row["nom"]." ".$row["prenom"];
								}
							?></td>
					<!-- <td><img src="./img/prac.svg" class="imgdoc"></td> -->
				</tr>
				<tr><td colspan="4">Tarif:   <?php
									echo $row['tarifdom'];
								?>
								</td>
						</tr>
				</tr> </div>
				<?php 
					// include("connexion.php");
					$idMedecin = array_pop($_GET);
					if(isset($_POST["submit2"])){
						$nom =htmlspecialchars(trim(strtolower($_POST['nom1'])));
						$prenom =htmlspecialchars(trim(strtolower($_POST['prenom1'])));
						$email =htmlspecialchars(trim(strtolower($_POST['email1'])));
						$age =htmlspecialchars(trim(strtolower($_POST['age1'])));
						$cin =htmlspecialchars(trim(strtolower($_POST['cin1'])));
						$tel =htmlspecialchars(trim(strtolower($_POST['tel1'])));
						$adresse =htmlspecialchars(trim(strtolower($_POST['adresse1'])));
						$consultationdom = false;
						$consultationcab = true;
						$consultationenligne = false;
						$idMedecin = $row['id'];
						$date = date('Y-m-d',strtotime($_POST['date1']));
						$hour = $_POST['hour1'];

						$query = "INSERT INTO rd(nom,prenom,email,age,cin,tel,adresse,consultationcab,consultationdom,consultationenligne,date,hour,idmedecin)
                        		  VALUES('$nom','$prenom','$email','$age','$cin','$tel','$adresse','$consultationcab','$consultationdom','$consultationenligne',
												'$date','$hour','$idMedecin')";
						$query_run = mysqli_query($con,$query);
						if($query_run){
							$_SESSION['status'] = "Time value inserted succefuly";
							// if(!headers_sent()){header("Location:#");}
							
						}
						else{
							$_SESSION['status'] = "Time value not inserted";
							// header("Location:#");
						}
					}
				
				?>
			<form action="#" method = "post">
				<tr >
					<td colspan="8" style="text-decoration: underline;"}>Veuillez entrer vos coordonnées </td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;Nom <input type="text" placeholder="entrez votre nom" name = "nom1" required></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;Prénom <input type="text" placeholder="entrez votre prénom" name = "prenom1" required></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;Email <input type="email" placeholder="entrez votre email" name = "email1" required></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age <input type="text" placeholder="entrez votre age" name = "age1"></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;Cin <input type="text" placeholder="entrez votre cin" name = "cin1" required></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel <input type="text" placeholder="entrez votre tel" name = "tel1"></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;Date <input type="date" placeholder="entrez votre nom" name = "date1"></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;Hour <input type="time" placeholder="entrez votre prénom" name = "hour1"></td>
				</tr>
				
				<tr>
					<td style="padding-left:150px">Adresse</td>
				</tr>
				<tr>
					<td colspan="8" style="padding-left:150px"><input type="text" placeholder="entrez votre adresse" name = "adresse1"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Confirmer" name = "submit2" class="confirm" style="height: 45px;
					margin :15px 0; margin-left : 68%; font-size:ghizlan"></td>
				</tr>
			</form>
		</table>
			<a href="#" class="modalclose">&times;</a>
		</div>
	</div>
			<a href="#" class="modalclose2">&times;</a>
		</div>
	</div>
    <!--dialog box 3-->
	<div id="modalbox3" class="modal3" style="padding-top:50px">
		<div class="modalcontent3">
		
		<table>
				<tr>
				<td class="hh"><svg class="homeicon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.6 483.2 483.9 512 448.5 512H128.1C92.75 512 64.09 483.3 64.09 448V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5H575.8zM328 232V176C328 167.2 320.8 160 312 160H264C255.2 160 248 167.2 248 176V232H192C183.2 232 176 239.2 176 248V296C176 304.8 183.2 312 192 312H248V368C248 376.8 255.2 384 264 384H312C320.8 384 328 376.8 328 368V312H384C392.8 312 400 304.8 400 296V248C400 239.2 392.8 232 384 232H328z"/></svg></td><td colspan="2"><h1>EN LIGNE</h1></td>
				</tr>
				
			</table>
			
			<table>
				<div class="table1">
				<tr style="top: 0;bottom: 0;">
					<td colspan="4">
							<?php 
								if($row["genre"]=="femme"){
									echo "Mme "." ".$row["nom"]." ".$row["prenom"];
								}
								else{
									echo "Mr ".$row["nom"]." ".$row["prenom"];
								}
							?></td>
					<!-- <td><img src="./img/prac.svg" class="imgdoc"></td> -->
				</tr>
				<tr><td colspan="4">Tarif:   <?php
									echo $row['tarifdom'];
								?>
								</td>
						</tr>
				</tr> </div>
				<?php 
					// include("connexion.php");
					$idMedecin = array_pop($_GET);
					echo $idMedecin;
					if(isset($_POST["submit3"])){
						$nom =htmlspecialchars(trim(strtolower($_POST['nom2'])));
						$prenom =htmlspecialchars(trim(strtolower($_POST['prenom2'])));
						$email =htmlspecialchars(trim(strtolower($_POST['email2'])));
						$age =htmlspecialchars(trim(strtolower($_POST['age2'])));
						$cin =htmlspecialchars(trim(strtolower($_POST['cin2'])));
						$tel =htmlspecialchars(trim(strtolower($_POST['tel2'])));
						$adresse =htmlspecialchars(trim(strtolower($_POST['adresse2'])));
						$consultationdom = false;
						$consultationcab = false;
						$consultationenligne = true;
						$idMedecin = $row['id'];
						$date = date('Y-m-d',strtotime($_POST['date2']));
						$hour = $_POST['hour2'];

						$query = "INSERT INTO rd(nom,prenom,email,age,cin,tel,adresse,consultationcab,consultationdom,consultationenligne,date,hour,idmedecin)
                        		  VALUES('$nom','$prenom','$email','$age','$cin','$tel','$adresse','$consultationcab','$consultationdom','$consultationenligne',
												'$date','$hour','$idMedecin')";
						$query_run = mysqli_query($con,$query);
						if($query_run){
							$_SESSION['status'] = "Time value inserted succefuly";
							// if(!headers_sent()){header("Location:#");}
							
						}
						else{
							$_SESSION['status'] = "Time value not inserted";
							// header("Location:#");
						}
					}
				
				?>
			<form action="#" method = "post">
				<tr >
					<td colspan="8" style="text-decoration: underline;"}>Veuillez entrer vos coordonnées </td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;Nom <input type="text" placeholder="entrez votre nom" name = "nom2"></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;Prénom <input type="text" placeholder="entrez votre prénom" name = "prenom2"></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;Email <input type="email" placeholder="entrez votre email" name = "email2"></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age <input type="text" placeholder="entrez votre age" name = "age2"></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;Cin <input type="text" placeholder="entrez votre cin" name = "cin2"></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel <input type="text" placeholder="entrez votre tel" name = "tel2"></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;Date <input type="date" placeholder="entrez votre nom" name = "date2"></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;Hour <input type="time" placeholder="entrez votre prénom" name = "hour2"></td>
				</tr>
				
				<tr>
					<td style="padding-left:150px">Adresse</td>
				</tr>
				<tr>
					<td colspan="8" style="padding-left:150px"><input type="text" placeholder="entrez votre adresse" name = "adresse2"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Confirmer" name = "submit3" class="confirm" style="height: 45px;
					margin :15px 0; margin-left : 68%; font-size:ghizlan"></td>
				</tr>
			</form>
		</table>
			<a href="#" class="modalclose3">&times;</a>

		</div>
	</div>
</body>

</html>
