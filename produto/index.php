<?php session_start()?>
<?php include_once 'includes/header.php'?>
<?php include_once 'includes/nav.php'?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Produto</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="lib/materialize/css/materialize.min.css">
    
</head>
<body>

<div class="container">	
<div class="col l6 s12 m6">
      <div class="card  grey lighten-4">
        <div class="card-content black-text">
          <span class="card-title"><h5><i class="material-icons left">account_circle</i>Cadastro de Produto</h5></span>
          <blockquote> 



		  <form action="php/create.php" 
		      method="post">
            
		   <?php if (isset($_GET['error'])) { ?>
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div>
		     <input class="chips chips-initial" type="text" 
		           id="nome" 
		           name="nome" 
		           value="<?php if(isset($_GET['nome']))
		                           echo($_GET['nome']); ?>" 
		           placeholder="Nome">
		   </div>

		   <div>
		     <input class="chips chips-initial" type="text" 
		           id="marca" 
		           name="marca" 
		           value="<?php if(isset($_GET['marca']))
		                           echo($_GET['marca']); ?>"
		           placeholder="marca">
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