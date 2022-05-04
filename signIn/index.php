<?php 
session_start();
include("connexion.php");
include ("update.php");
if(!isset($_SESSION['USER_ID'])){
	header("location:signIn.php");
	die();
}

$query = "SELECT * FROM  medecin  WHERE id= '$id'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);

error_reporting(E_ERROR|E_PARSE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- bootstrap js -->
<script
src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"
></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"
></script>
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"
></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<link rel="icon" type="image/png" href="./img/Layer 1.png" />

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
					
					<span class="text">Mes informations </span>
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
					<span class="text">Lieux</span>
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
					<i class='bx bxs-spreadsheet'></i>
					<span class="text">Rendez-vous</span>
				</a>
			</li>
		</ul>
	
		<ul class="side-menu">
			
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Se déconnecter</span>
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
			<!-- <a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a> -->
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main id="invoice" >
			
			<div class="head-title" id="info">
				<div class="left" >
					<h1>Mes informations</h1>
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
				<!-- <a href="#" class="btn-download" id="download" >
					<i class='bx bxs-cloud-download' ></i> 
					  <span class="text"  >Télécharger Pdf</span>
				</a> -->
			</div>
				<!-- DOCTEUR INFORMATION -->
				<div class="grand">
				<div class="premier">
			<!-- <ul class="box-info" id="hidden">
				
				<li>
				<img src="img/black.jpg" alt="" class="profile"/>
				<span class="text">
					<h3>Dr.Slimani Mohammed</h3>
					<p>Médecin généraliste: médecine générale, docteur et médecin </p>
					
				</span>
				<span id="icon"><i class=' box bx bxs-cog' ></i>
				 </span>
				</div>
			</li>
			</ul> -->
			<ul class="box-info" id="hidden">
				
				<li>
				<!-- ----------------AFFICHAGE DU PROFIL----------- -->
				<?php
			 	echo'<img class="profile" src = "data:image/jpg;base64,' . base64_encode("$row[photo]") . '" width = "162px" height = "147px"/>';
		       ?>
				<span class="text">
					<!-- La variable ou on a stockes le nom du medecin sera utilise ici  -->
					<!-- ----------------AFFICHAGE DU NOM----------- -->
					<h3><?php 
								if( "$row[genre]"== 'femme') echo'Mme.';
								else echo'Mr.';
								echo "$row[nom] $row[prenom] ";
						?>   
					</h3>

					<!-- ----------------AFFICHAGE DU SPECIALITE----------- -->
					<p>
						<?php 
							echo"$row[bio]";
					    ?>   
					 </p>
					
				</span>
				<span id="icon"><i class=' box bx bxs-cog' ></i>
				 </span>
				</div>
			</li>
							
			</ul>
			<!-- DOC INFO MODIFIER -->
			<div class="deuxieme">
			<ul class="  box-info" id="ji">
			<form action="index.php" method="post" enctype="multipart/form-data">
				<li>
				<div >
				
				<div class="imageitems">
					<label for="profileImage" class=im>Image de profile:</label>
				<input type="file" name="img" id="profileImage" />
				<div>
					<div>
				<span class="text">
					<h3><?php 
								if( "$row[genre]"== 'femme') echo'Mme.';
								else echo'Mr.';
								echo "$row[nom] $row[prenom] ";
						?>   </h3>
					<input type="text" name="bio" class="biog" placeholder=" remplir votre bio "/>
					<div>
				</span>
				<span ><input type="submit" name="submit" value="Enregistrer"id="sub"></i>
				 </span>
				</div>
			</li>
			</form>		
							
			</ul>
			</div>
			</div>
			<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
			

			<div class="table-data" >
				<div class="order" id="specia">
					<div class="head">
						<i class='bx bx-task'></i>	
						<h3> Spécialités & Etats de santé </h3>
						
					</div>
					<div class="div-spec">
					<div class="spec etat ">
						
					<!-- ----------------AFFICHAGE DU SPECIALITE----------- -->
					<h5>
						<?php
						echo "$row[specialite]";
						?>
						</h5>
							</div>
						</div>
						
						<div class="spec "> <h5>	<?php 
								echo"$row[sym1]";
						?> </h5></div>
						<div class="spec "> <h5> 	<?php 
								echo"$row[sym2]";
						?>  </h5></div>
						<div class="spec "> 
							<h5> 
								<!-- ----------------AFFICHAGE DU SYMPTOME----------- -->
							<?php 
								echo"$row[sym3]";
						?>   
							</h5>

					</div >
					<i class='regler bx bxs-cog' id="etatt" ></i>

				
				</div>
				
				<!-- div2 hidde -->
				
				<div class="order  hide" id="hidee">
					<div class="head">
						<i class='bx bx-task'></i>	
						<h3> Spécialités & Etats de santé </h3>
						
					</div>
					<form action="index.php" method="post" enctype="multipart/form-data">
					<div class="div-spec">
					<div class="spec etat  "> <input type="text" name="specia" placeholder="ton specialité" id="spec"/> </div>
					<div class="a"></div>
					<div class="spec ">  <input type="text" name="symp1" placeholder="entrer une symptôme" class="symp"/></input> </div>
					<div class="spec ">  <input type="text" name="symp2" placeholder="entrer une symptôme" class="symp"/></input> </div>
					<div class="spec ">  <input type="text" name="symp3" placeholder="entrer une symptôme" class="symp"/></input></div>
					</div >
					<input type="submit" name="sub" value="Modifier" id="subb"></i>

				
				</div>
</form>
				<div class="todo" id="lieux">
					<?php
					$adress0 = "$row[localisation]";
					$adress1 = "$row[ville]";
					$adress= "maroc ".$adress1." ".$adress0;
					$adressGps = str_replace("", "+" , $adress);
					?>
					<iframe src="https://maps.google.com/maps?&q=<?php echo $adressGps; ?>&output=embed " width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				
			</div>
			<!-- EXpérience -->

			<div class="table-data">
				<div class="order " id="experience">
					<div class="head">
						<i class='bx bx-spreadsheet'></i>
						<h3>Expérience</h3>
						
					</div>
					<div class="experience">
						<ul>
							<li> 
							</li>
							<!-- ----------------AFFICHAGE DE L EXPERIENCE----------- -->
							<?php 
								$query = "SELECT * FROM  medecin  WHERE id= '$id' ";
								$result = mysqli_query($con,$query);
								$row = mysqli_fetch_array($result);
								echo"$row[experience]";
						   ?>   

						</ul>

					</div>
					<i class='regler bx bxs-cog'  id="iconexp"></i>

				</div>
				<!-- div experience  hide -->
				<div class="order exphide " id="exphiden">
					<div class="head">
						<i class='bx bx-spreadsheet'></i>
						<h3>Expérience</h3>
						
					</div>
					<form action="index.php" method="post" enctype="multipart/form-data">
					<div class="experience">
						
							<input type="text" name="experience" placeholder="entrer votre expérience " class="placeexp"/> 
							
							
						

					</div>
					<input type="submit" name="submit1" value="modifier" id="modifexpe"/>
					</form>
				</div>
				</div>
				<!-- Description -->
				<div class="table-data " id="showndesc">
					<div class="order" id="description">
						<div class="head">
							<i class='bx bxs-message-dots' ></i>
							<h3>Description </h3>
							
						</div>
						<div>
							<!-- ----------------AFFICHAGE DE la description----------- -->
							<?php 
								echo"$row[description]";
						   ?>
						</div>
						
					</div>
					<i class='regler bx bxs-cog' id="descicon"></i>

					</div>

					<!-- hidetable -->
					<form action="index.php" method="post" enctype="multipart/form-data">

					<div class="table-data " id="hidetable">
					<div class="order" id="description">
						<div class="head">
							<i class='bx bxs-message-dots' ></i>
							<h3>Description </h3>
							
						</div>
						<div>
							<input type="text" name="description"  placeholder="entrer ton description" id="desc"/>
						</div>
						
					</div>
					<input type="submit" name="submit2" value="modifier" id="deschide"/>

					</div>
					</form>
					<!-- ************ Tarifs *********************************** -->
					<div class="table-data">
						<div class="order" id="tarif">
							<div class="head">
								<i class='bx bxs-badge-dollar'></i>	
								<h3>Tarif</h3>
								
							</div>
							<table >
							<?php
								
								$query = "SELECT * FROM  medecin  WHERE id= '$id'";
                                $result = mysqli_query($con,$query);
                                $row = mysqli_fetch_array($result);
								?>
								<thead>
									<tr>
										<th>Type de consultation </th>
										<th>Prix</th>
										<th>Etat</th>
									</tr>
								</thead>
								<tbody>
									<tr class="codoms">
										<td>
											
											<p>Consultation à domicile </p>
										</td>
										<td><?php echo"$row[tarifdom]"?></td>
										<td><span class="status  pending modtarif">Modifier</span></td>
									</tr>
									<!-- à modifier -->
			<form action="index.php" method="post" enctype="multipart/form-data">

									<tr class="codom">
										<td>
											
											<p>Consultation à domicile </p>
										</td>
											<td> <input type="text" placeholder="tarif" name="tarifdom" /> </td>
										<td><input  type="submit"  value="Enregitrer" class="status  pending  enre enremod" name="enre1" ></td>
									</tr>
									<!-- end à modifier -->

									<tr class="codoms1">
										<td>
											<p>Consultation au cabinet</p>
										</td>
										<td><?php echo"$row[tarifcabinet]"?></td>
										<td><span class="status pending modtarif1 ">Modifier</span></td>
									</tr>
									<!-- 2éme à modifier -->
									<tr class="codom1">
										<td>
											
											<p>Consultation au cabinet</p>
										</td>
										<td> <input type="text" placeholder="tarif" name="tarifcabinet" /> </td>
										<td><input  type="submit" value="enregistrer" class="status  pending  enre enremod1" name="enre2" ></td>
									</tr>
									<!-- end 2 éme à modifier  -->

									<tr class="codoms2">
										<td>
											
											<p>Consultation en ligne</p>
										</td>
										<td><?php echo"$row[tarifenligne]"?></td>
										<td><span class="status  pending modtarif2">Modifier</span></td>
									</tr>
									<!-- 3éme à modifier -->
									<tr class="codom2">
										<td>
											
											<p>Consultation en ligne</p>
										</td>
										<td> <input type="text" placeholder="tarif" name="tarifenligne"  /> </td>
										<td><input type="submit" value=" enregistrer" class="status  pending  enre enremod2" name="enre3"></td>
									</tr>
									<!-- end 3 éme à modifier  -->
									
								</tbody>
							</table>

						</div>
					
						</div>
					</form>
			<!-- rendez-vous -->
			<div class="table-data">
				<div class="order" id="rend">
					<div class="head">
						<i class='bx bxs-spreadsheet'></i>
						<h3>Rendez-vous</h3>
						
					</div>
					<table>
						<thead>
							<tr>
								<th><i class='bx bx-user-circle'></i>
									Nom complet </th>
								<th><i class='bx bx-sitemap'></i>Type de prise</th>
								<th><i class='bx bxs-time'></i>Date</th>
							</tr>
						</thead>
						<tbody>
							<!-- -------------------------------LES PATIENTS----------------------- -->
							<?php
							 $patient = "SELECT * FROM  rd WHERE idmedecin = '$id'";
							 $pData = mysqli_query($con,$patient);
							//  $data = mysqli_fetch_array($pData);
						   
							
								
								 while( $data = mysqli_fetch_array($pData))
						    { echo "<div class='patient'>
							<tr class='button'>
								<td>
									<!-- ----------------AFFICHER LE NOM------------------------ -->
									";
									echo "$data[nom]  $data[prenom]";
								echo "</td>
								<td>
									<!-- ----------------CONSULTATION------------------------ -->
									";
									     if("$data[consultationdom]"==1)
										 echo "Consultation à domicile";
										 elseif("$data[consultationcab]"==1)
										 echo "Consultation au cabinet";
										 elseif("$data[consultationenligne]"==1)
										 echo "Consultation en ligne";
									 
									

								echo "</td>
								<td><!-- ----------------DATE ET HEURE------------------------ -->
									<span >";
									
									$date = date('Y-m-d',strtotime($data['date'])); 
									echo " $data[date] -- $data[hour]
									
									</span>
								</td>
								<td class='details' tabindex='1'><i  class='bx bxs-user-detail'></i></td> 
							</tr>
							<tr class='div'>
								<td>Num tele: &nbsp; $data[tel] </br></br> CIN:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; $data[cin] </br></br> Gmail: &nbsp; &nbsp; &nbsp; $data[email]</br></br></td>
								
							</tr>
					          </div>
							  ";}
							
					   echo" </tbody>
					</table>";?>
				
			</div>

		</main>


	
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	

	<script src="script.js"></script>
</body>
</html>