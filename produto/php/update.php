<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM produto WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['nome']);
	$marca = validate($_POST['marca']);
	$id = validate($_POST['id']);

	if (empty($name)) {
		header("Location: ../update.php?id=$id&error=O nome é obrigatório");
	}else if (empty($marca)) {
		header("Location: ../update.php?id=$id&error=O email é obrigatório");
	}else {

       $sql = "UPDATE produto
               SET nome='$name', marca='$marca'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=Alteração Feita com sucesso");
       }else {
          header("Location: ../update.php?id=$id&error=Ocorreu um erro&$user_data");
       }
	}
}else {
	header("Location: read.php");
}