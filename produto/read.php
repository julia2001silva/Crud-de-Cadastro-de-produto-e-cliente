<?php session_start()?>
<?php include_once 'includes/nav.php'?>
<?php include "php/read.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Cliente</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="lib/materialize/css/materialize.min.css">
</head>
<body>


<br><br>
   <div class="container">
   <div class="col l12 s12 m6">
      <div class="card  pink accent-3">
        <div class="card-content white-text">
          <span class="card-title"><h5>Produtos Cadastrados</h5></span>
          
        </div>
      </div>
    </div>
  </div>

</div>

	<div class="container">
		<div class="box">
			<?php if (isset($_GET['success'])) { ?>
		    <div  role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="striped">
			  <thead>
			    <tr>
			      <th scope="col">id</th>
			      <th scope="col">Nome do Produto</th>
			      <th scope="col">Marca do Produto</th>
			      <th scope="col">Acões</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['nome']?></td>
			      <td><?php echo $rows['marca']; ?></td>
			      <td><a href="update.php?id=<?=$rows['id']?>" 
			      	     class="waves-effect black btn"><i class="material-icons left">edit</i></a>

			      	  <a href="php/delete.php?id=<?=$rows['id']?>" 
			      	     class="waves-effect black btn"><i class="material-icons left">delete</i></a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<div class="link-right">
				<br><a href="index.php" class="waves-effect black btn">Cadastrar</a>
			</div>
		</div>
	</div>

	<!---ARQUIVOS JQUERY E JAVASCRIPT--->
	<script type="text/javascript" src="../lib/materialize/js/jquery-3.6.1.min.js"></script>
            <script type="text/javascript" src="../lib/materialize/js/materialize.min.js"></script>
            
            
            <!---INICIALIZAÇÃO JQUERY---->
            
            <script type="text/javascript">
                $(document).ready(function(){
                    
                });
            
                </script>
</body>
</html>