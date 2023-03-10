<?php session_start()?>
<?php include_once 'includes/header.php'?>
<?php include_once 'includes/nav.php'?>

<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="lib/materialize/css/materialize.min.css">
</head>
<body>
	<div class="container">
		

		<div class="row">
    <div class="col l12 s12 m6">
      <div class="card grey lighten-4">
        <div class="card-content black-text">
          <span class="card-title"><h5><i class="material-icons left">edit</i>Alterando os dados </h5></span>
          <blockquote>
		  <form action="php/update.php" 
		      method="post">
            
		   
		   <?php if (isset($_GET['error'])) { ?>
		   <div role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>

		   <div>
		     <input class="chips chips-initial" type="text"  
		           id="nome" 
		           name="nome" 
		           value="<?=$row['nome'] ?>" >
		   </div>

		   <div>
		     <input class="chips chips-initial" type="text" 
		           id="marca" 
		           name="marca" 
		           value="<?=$row['marca'] ?>" >
		   </div>
		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="waves-effect black btn"
		           name="update">Alterar</button>
		    <a href="read.php" class="waves-effect black btn">Consultar</a>
	    </form>

    </blockquote><br>
    
        </div>
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