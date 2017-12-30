<?php
//FAZ A CONEXÃO COM O BANCO DE DADOS
// ALTERE AS INSTANCIA  PDO COM OS DADOS DO BANCO
abstract class DAO {
    static private $conn;
    
    private function setConn(){
        
      if(is_null(self::$conn)){
      
           try {
           self::$conn = new PDO("mysql:host=localhost;dbname=sist_comentario",'root',''); 
           echo '';
           }catch (Exception $ex) {
               echo "Falha na conexão.Erro->$ex";
                  }  
            }
        else{
         
          self::$conn;
        }
          return self::$conn;        
    }
    
    public function getConn(){
        return $this->setConn();
        
    }
    
}

