<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);
	$email = validate($_POST['email']);

	$user_data = 'name='.$name. '&email='.$email;

	if (empty($name)) {
		header("Location: ../index.php?error=O nome é obrigatorio&$user_data");
	}else if (empty($email)) {
		header("Location: ../index.php?error=O nome é obrigatorio&$user_data");
	}else {

       $sql = "INSERT INTO users(name, email) 
               VALUES('$name', '$email')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=Cadastrado com Sucesso");
       }else {
          header("Location: ../index.php?error=Ocerreu um erro&$user_data");
       }
	}

}