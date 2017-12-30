<?php
include_once 'DAO/DAO.class.php';
include_once 'DAO/CRUD.class.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<style>
.p  { 
color: black;
}

.palert{
  color: red;  
}
</style>
</head>
<body>

<?php
if(!isset($_SESSION['nome'])){ 
  echo' <p class= "palert">*  Realize o login para que seu comentario seja enviado</p>';
}else{
     echo'<p class="p"> Faça seu comentario </p>';
}
?>
</body>
</html>