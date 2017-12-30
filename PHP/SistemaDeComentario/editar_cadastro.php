<?php
//PAGINA QUE O USUARIO EDITA SEU PROPRIO CADASTRO 

session_start();
include_once 'DAO/DAO.class.php';
include_once 'DAO/CRUD.class.php';

$id = $_SESSION['id'];

$cadastro = new CRUD();
$value_cadastro = $cadastro->select('cadastro','WHERE id ='.$id, array(), '*')
?>

<?php
if(!isset($_SESSION['id']) ){
   header('Location:index.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>    

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style_comentarios.css" rel="stylesheet" type="text/css"/>
  <script src="JS/jquery-3.1.1.min.js" type="text/javascript"></script>
  <link href="css/style_modal.css" rel="stylesheet" type="text/css"/>
  <script src="JS/AJAX.js" type="text/javascript"></script>
  <script src="JS/validaEdicaoDeCadastro.js" type="text/javascript"></script>
  <link href="css/edita_cadastro.css" rel="stylesheet" type="text/css"/>
<meta charset="UTF-8">
</head>

<body>
<!-- inclui o menu de login -->
    <?php include 'menu_topo.php'; ?>
    
<div id="cont_form">
   <?php foreach ($value_cadastro as $value) { ?>
  <form id="formuser" nome="formuser" form action="cadastrar.php" method="post" enctype="multipart/form-data" >
    <h1> Alterar cadastro</h1>  
    
    <div id="foto"> <?php echo "<img src='data:image/jpeg;base64,".base64_encode($value['imagem'])."'/>";?> </div>
    <hr>
  <label for="fname">Nome</label>
  <input type="text" id="nome_cadastra" name="nome_cadastra" value="<?php echo $value['nome'] ?>"><br>

  <label for="lname">Email</label><br>
  <input type="text" id="email_cadastra" onkeyup="verificaEmailCadastrado();" name="email_cadastra" value="<?php echo $value['email'] ?>"><br>
  <input type="hidden" id="hidden" name="hidden" value="">
    <hr>
	     
    <label for="lname">Senha antiga</label><br>
    <input type="password" id="senhaAntiga" name="senhaAntiga" value="" placeholder="digite sua antiga senha para altera-la" ><br>
    <input type="hidden" id="confirmaSenhaAntiga" name="ConfirmaSenhaAntiga"  value="<?php echo $value['senha'] ?>"><br>

    <label for="lname">Nova senha</label><br>
    <input type="password" id="senha_cadastra" value="" name="senha_cadastra" placeholder="digite a nova senha"><br>
	<hr>
  <?php } ?>
	<label for="lname">Imagem</label><br>
        <input  id="imagem" name="imagem" type="file" accept="image/*" placeholder="imagem"/><br>

     <input type="submit" value="Gravar alterações" onclick="return validaEdicaoDeCadastro();">
     <input type="button" value="Voltar" onclick="window.history.back();">
  </form>
</div>

</body>
</html>
