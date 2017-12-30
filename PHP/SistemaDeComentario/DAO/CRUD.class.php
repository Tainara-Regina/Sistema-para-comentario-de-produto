<?php
// FAZ AS OPERAÇOES NO BANCO DE DADOS

//ESTE CRUD POSSUI O PREPARE  
class CRUD extends DAO{
    private $query;
    //Query sem prepare para inserir a imagem no BD corretamente
    private $querySemPrepare;
   
    
    //------------------------- CHAMAR QUANDO FOR FAZER BUSCA! -----------------------------
    private function prepAndExec($prep,$exec){
       
        $this->query=$this->getConn()->prepare($prep);
        if($this->query->execute($exec)!=true){
            echo 'Não há dados retornados.';
        } 
        }
   
    public function insert($table,$prep,$exec){
        
        $this->prepAndExec('INSERT INTO '.$table.' SET '.$prep.'',$exec);
        return true;
       }
       
 
        public function select($table,$prep,$exec,$fields){
        $this->prepAndExec('SELECT '.$fields.' FROM '.$table.' '.$prep.'',$exec);
       
        
        return $this->query;
            }
       
        public function update($table,$prep,$exec,$fields){
        $this->prepAndExec('UPDATE '.$table.' SET '.$prep. ' '.$fields.'',$exec);
           }

           public function delete($table,$prep,$exec){
        $this->prepAndExec('DELETE FROM '.$table.' WHERE '.$prep.'',$exec);
           }
           
               
           
           
        
//------------------------- CHAMAR QUANDO FOR INSERIR IMAGEM! -----------------------------
       
              
       
       private function prepAndExecSemPrepare($exec){
       
        $this->querySemPrepare=$this->getConn();
        if($this->querySemPrepare->exec($exec)!=true){
            echo 'Ocorreu um erro,não foi possivel realizar a operação no banco de dados.';
        } 
        }
       
       public function insertImg($table,$prep,$exec){
        
        $this->prepAndExecSemPrepare("INSERT INTO "." ". $table. " (".$prep.") ". "VALUES". " (".$exec.") ");
        return true;
       }
       
       
       
       
       public function atualizaCadastro($table,$prep,$exec){
        
        $this->prepAndExecSemPrepare("UPDATE ".$table." SET ".$prep." ".$exec);
        return true;
       }
      
 //----------------------------------------------------------------------------------------------------------
       
       
       
       
       
       
       
       
       
       
       
           
        }
        
     