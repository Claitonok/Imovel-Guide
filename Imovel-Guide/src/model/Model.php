<?php
namespace src\model;
use src\model\Conexao;

class Model
{
    protected $conn;
 
    public function __construct()
    {
        $this->conn = Conexao::Connection();
    } 

    public function fetch()
    {
        try {

            $sql = "SELECT * FROM `corretores`;";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetchAll();

            if (!$stmt) { 
                var_dump($stmt->errorInfo()); 
            }

            return $res;
               
        } catch (Exception $e) {
            var_dump("Failed: \n" . $e->getMessage() . "\n Linha: \n" . $e->getLine());
          }
    }
    public function create($nome, $cpf, $creci)
    
    {
        try {
           
            $stmt = $this->conn->prepare("INSERT INTO `corretores`(`nome`, `cpf`, `creci`) VALUES (?,?,?)");
            $stmt->bindValue(1, $nome);
            $stmt->bindValue(2, $cpf);
            $stmt->bindValue(3, $creci);

            $result = $stmt->execute();
            if (!$result ) { 
               var_dump($stmt->errorInfo()); 
            }
         
    
        } catch (Exception $e) {
            var_dump("Failed: \n" . $e->getMessage() . "\n Linha: \n" . $e->getLine());
          }
       
    }

    public function update($txtid, $txtnome, $txtcpf, $txtcreci)
    {
        try {

                $stmt = $this->conn->prepare("UPDATE `corretores` SET `nome`= '$txtnome', `cpf`= '$txtcpf', `creci`= '$txtcreci'  WHERE `id`= '$txtid';");
                // $stmt->bindValue(1, $txtid);
                $stmt->execute();
                 if (!$result ) { 
                     var_dump($stmt->errorInfo()); 
                }
           
        } catch (Exception $e) {
            var_dump("Failed: \n" . $e->getMessage() . "\n Linha: \n" . $e->getLine());
          }
    }

    public function delete($id)
    {
        try {
            if ($id) {
                $stmt = $this->conn->prepare("DELETE FROM `corretores` WHERE `id`= $id");
                // $stmt->bindValue(1, $id);

                $stmt->execute();

                if (!$result ) { 
                    var_dump($stmt->errorInfo()); 
                }
            }
    
        }catch (Exception $e) {
            var_dump("Failed: \n" . $e->getMessage() . "\n Linha: \n" . $e->getLine());
          }

    }


}