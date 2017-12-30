
                --- BANCO DE DADOS ---

 1 - CRIE um banco de dados exclusivo para as tabelas do programa.

 2 - Importe para o banco de dados criado o arquivo dump.sql.
 
 ---------------------------------------------------------


   --- CONFIGURAR BANCO DE DADOS NA PASTA DAO DO PROGRAMA ---

 1 - Dentro da pasta PHP/SistemaDeComentario/DAO/
tem o arquivo DAO.class.php.
Este arquivo possui as configurações para a conexão no banco de dados.
Na linha 12,inclua as configurações do seu banco.
Exemplo:
  self::$conn = new PDO("mysql:host=localhost;dbname=sist_comentario",'root','');  

-------------------------------------------------------------



      ---- SALVAR A PASTA SistemaDeComentario ----

1 - Salve a pasta SistemaDeComentario que esta dentro da pasta PHP completa no servidor.

2 - Se estiver utilizando o XAMPP,salve a pasta SistemaDeComentario na pasta htdocs.

3 - Não mova ou remova qualquer arquivo desta pasta.

4 - Para executar o programa digite na barra de endereço:
Se o servidor for local(XAMPP):

http://localhost/SistemaDeComentario/index.php

------------------------------------------------------------


   --- PARA REALIZAR UM CADASTRO -----


1 - Clique em login no canto superior direito.

2- Escolha a opção que esta abaixo no botão LOGIN: "Ainda não é regstrado? Criar conta".

3 - Insira todos os dados solicitados e clique em "CRIAR CONTA".

Após o procedimento,já é possivel realizar comentarios e editar o proprio cadastro. 