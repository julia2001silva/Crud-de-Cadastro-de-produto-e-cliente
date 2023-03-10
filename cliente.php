<?php session_start()?>
<?php include_once 'includes/header.php'?>
<?php include_once 'includes/nav.php'?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Cliente</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="lib/materialize/css/materialize.min.css">
    
</head>
<body>

<div class="container">
	
<div class="col l6 s12 m6">
      <div class="card  grey lighten-4">
        <div class="card-content black-text">
          <span class="card-title"><h5><i class="material-icons left">account_circle</i>Cadastro de Cliente</h5></span>
          <blockquote> 



		  <form action="php/create.php" 
		      method="post">
            
		   <?php if (isset($_GET['error'])) { ?>
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div>
		   <input class="chips chips-initial" type="text" 
		           id="name" 
		           name="name" 
		           value="<?php if(isset($_GET['name']))
		                           echo($_GET['name']); ?>" 
		           placeholder="Nome">
		   </div>

		   <div>
		     <input class="chips chips-initial" type="email" 
		           id="email" 
		           name="email" 
		           value="<?php if(isset($_GET['email']))
		                           echo($_GET['email']); ?>"
		           placeholder="Email">
		   </div>
		   <button type="submit" 
		          class="waves-effect black btn"
		          name="create">Cadastrar</button>
				  <button type="reset" 
		          class="waves-effect black btn"
		          >Limpar</button>
				  <a href="read.php" class="waves-effect black btn">Consultar</a>
	    </form>
    </blockquote><br>
		   
        </div>
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