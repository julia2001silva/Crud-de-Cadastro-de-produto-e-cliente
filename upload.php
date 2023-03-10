

<?php
session_start(); 
include_once './conexao.php';
include_once 'includes/header.php';
include_once 'includes/nav.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="lib/materialize/css/materialize.min.css">
    <title>Upload de Imagem</title>
</head>

<body>
   
    <?php
    // Recebendo os dados do formulário
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

   
    if (!empty($dados['SendCadUser'])) {
        var_dump($dados);

        //QUERY para cadastrar usuário no db
        $query_usuario = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";

        $cad_usuario = $conn->prepare($query_usuario);
        $cad_usuario->bindParam(':nome', $dados["nome"]);
        $cad_usuario->bindParam(':email', $dados["email"]);
        $cad_usuario->execute();

        
        if ($cad_usuario->rowCount()) {

            $usuario_id = $conn->lastInsertId();
            $diretorio = "imagens/$usuario_id/";
            mkdir($diretorio, 0755);
            $arquivo = $_FILES['imagens'];
            var_dump($arquivo);
            for ($cont = 0; $cont < count($arquivo['name']); $cont++) {

               
                $nome_arquivo = $arquivo['name'][$cont];

                

                $destino = $diretorio . $arquivo['name'][$cont];


                if (move_uploaded_file($arquivo['tmp_name'][$cont], $destino)) {

                    $query_imagem = "INSERT INTO imagens (nome_imagem, usuario_id) VALUES (:nome_imagem, :usuario_id)";

                    $cad_imagem = $conn->prepare($query_imagem);
                    $cad_imagem->bindParam(':nome_imagem', $nome_arquivo);
                    $cad_imagem->bindParam(':usuario_id', $usuario_id);

                    if ($cad_imagem->execute()) {
                        $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
                    } else {
                        $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Imagem não cadastrada com sucesso!</p>";
                    }
                } else {
                    $_SESSION['msg'] = "<p style='color:red;'>Usuário não cadastrado com sucesso!</p>";
                }
            }
        }
    }
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    ?>



    <div class="row ">
    <div class="col l12 s12 m12">
      <div class="card grey lighten-4">
        <div class="card-content black-text">
          <span class="card-title"><h5><i class="material-icons left">file_upload</i>Sistema de Upload de Imagem</h5></span>
          <form method="POST" action="" enctype="multipart/form-data" class="col l12">
        <label><h6>Nome:</h6> </label>
        <input  type="text" name="nome" placeholder="Nome completo"><br><br>

        <label><h6>E-mail: </h6></label>
        <input type="email" name="email" placeholder="Digite o seu e-mail"><br><br>

        <label>Imagens: </label>
        <input type="file" name="imagens[]" multiple="multiple" ><br><br>
        <input type="submit" name="SendCadUser" value="Cadastrar" class="waves-effect black btn"><br><br>

        
    </form>
    <blockquote>
    Desenvovlimento para Servidores ll
    </blockquote>
        </div>
      </div>
    </div>




</body>
<footer>
<script type="text/javascript" src="../lib/materialize/js/jquery-3.6.1.min.js"></script>
            <script type="text/javascript" src="../lib/materialize/js/materialize.min.js"></script>
</footer>
</html>