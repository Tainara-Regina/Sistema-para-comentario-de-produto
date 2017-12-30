
<!DOCTYPE html>
<html>
    <head>    
<style>
    body{
      background-color:#1C1C1C;
    }
</style>
</head>
<body>
<?php
//ESTA PAGINA CADASTRA NOVOS USUARIOS
session_start();
include_once 'DAO/DAO.class.php';
include_once 'DAO/CRUD.class.php';

$nome =  $_POST['nome_cadastra'];
$email = $_POST['email_cadastra'];
$senha = $_POST['senha_cadastra'];
 

$imagem = $_FILES['imagem']['tmp_name'];
$imgTamanho = $_FILES['imagem']['size'];
$imgTipo = $_FILES['imagem']['type'];
$imgNome = $_FILES['imagem']['name'];

var_dump($imagem);


if(  !$imagem == "") { 
      echo 'criou a imagem pra subir ';	
  $fp = fopen($imagem, "rb");
$conteudo = fread($fp, $imgTamanho);
$conteudo = addslashes($conteudo);
fclose($fp);
}

if(!isset($_SESSION['id']) || !isset($_SESSION['nome']) ){
    echo 'Escolheu o quando não possui cadastro';
$teste = new CRUD();
$response = $teste->insertImg('cadastro','nome,email,senha,imagem',"'$nome','$email','$senha','$conteudo'");

// FAZ A PRESQUISA DOS DADOS CADASTRADOS E LOGA O USUARIO NO ATO DA CRIAÇÃO DO CADASTRO  ----
$check_user= new CRUD();
$array = $check_user->select('cadastro',"where email='$email' AND senha ='$senha'",array(),'nome,id');
$quant_registro = $array->rowCount();


if($quant_registro > 0){
   foreach ($array as $value) {
   $_SESSION['nome'] = $value['nome'];
   $_SESSION['id'] = $value['id'];
   }

}
//----------------------------------------------------------------------------------
   }
else if(isset($_SESSION['id']) && $imagem ==""  ){
    echo 'Escolheu o que a imagem é vazia!';
    $idSession = $_SESSION['id'];
     $teste = new CRUD();
  $response = $teste->atualizaCadastro('cadastro'," nome='$nome',email='$email',senha='$senha'"," WHERE id = '$idSession'");
    
 }else if(isset($_SESSION['id'])  && !$imagem == "" ){
     $idSession = $_SESSION['id'];
     $teste = new CRUD();
  $response = $teste->atualizaCadastro('cadastro'," nome='$nome',email='$email',senha='$senha',imagem='$conteudo'"," WHERE id = $idSession");
  echo 'Escolheu o que possui imagem!';
        
    }
?>

<script>
 window.history.back();
</script>

</body>