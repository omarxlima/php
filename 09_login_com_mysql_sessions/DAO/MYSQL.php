<?php 

class MySQL extends PDO
{
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $db = "sistema_php";

    private $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    public function __construct()
    {
        
        
        try {
            //data source name, onde o php vai encontrar o banco de dados
            
            $dsn = "mysql:host=". $this->host .";dbname=" . $this->db;
            //PHP Data Object
            return parent::__construct($dsn, $this->usuario, $this->senha, $this->opcoes); //::statico () ; -> instancia de um objeto(conteudo da classe), memoria do objeto; 

        } catch (Exception $e) {
            echo $e->getMessage();
            echo "<hr/>";
            var_dump($e->getTrace());
        }
    }
}