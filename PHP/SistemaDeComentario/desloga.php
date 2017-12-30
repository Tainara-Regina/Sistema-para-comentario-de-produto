<?php 
//PAGINA QUE DESLOGA O USUARIO
//ESTA PAGINA RECEBE A URL DA PAGINA ANTERIOR CAPITURADA E PASSADA VIA GET
//DESTROI AS SESSIONS[]

/* CAPTURAR A URL NA PG ANTERIOR COM $_SERVER['SERVER_NAME'] E PASSAR NO LINK */
 session_start();

if(isset($_SESSION['id']) || $_SESSION['nome']){
	session_destroy();
}
?>

<script>
 window.history.back();
</script>