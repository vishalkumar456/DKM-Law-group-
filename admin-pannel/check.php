<?php if(!isset($_SESSION['loggedin'])){

	header('location:../index.php');
	  }
	  else{
	  	if($_SESSION['Role']!='1'){
	  		header('location:../index.php');
	  	}
	  }
	  

	?>