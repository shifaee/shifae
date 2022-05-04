<!-- 
include("connexion.php");
if (isset($_POST['email']) && isset($_POST['password'])){
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$email = validate( $_POST['email']);
	$pass = validate ( $_POST['password']);
	$sql = "SELECT * FROM users WHERE gmail= '$email' AND password ='$pass'";
	$resul =  mysqli_query($con,$sql);
	if (mysqli_result($resul)=== 1){
		$row = mysqli_fetch_assoc($resul);
		if($row['gmail']=== $email && $row['password'] === $pass){
			echo "loogged in !";

		}else {
			header("location:signin.php?error=Incorect User name or pass");
			exit();
		}
	} -->
