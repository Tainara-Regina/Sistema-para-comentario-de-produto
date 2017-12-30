<!-- MENU DO LOGIN-->
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="JS/jquery-3.1.1.min.js" type="text/javascript"></script>
  <link href="css/style_modal.css" rel="stylesheet" type="text/css"/>
  <script src="JS/AJAX.js" type="text/javascript"></script>
<meta charset="UTF-8">
</head>

<?php  if(!isset($_SESSION['nome'])){ ?>
<div class="login" id="myBtn" > <p><?php echo 'Login'; ?></p> </div>
 <?php }else{ ?>

<div class="login" <?php echo 'id="myBtnEscondido"'?> >
    <p> <a href="desloga.php"> <?php echo 'Sair '; ?></a>
    </p> 
    <p> <a href="editar_cadastro.php"> <?php echo 'Editar perfil '; ?></a></p> </div>
<?php } ?>
</html>