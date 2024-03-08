<?php 
include 'MYSQL.php';
class CategoriaDAO
{
    private $conexao;
    /**Retorna todos registros da tabela Categoria */
    public function __construct()
    {
        $this->conexao = new MySQL();
    }
    /**Metodo lista todas categorias */
    public function index()
    {
        $sql = "SELECT * FROM categoria";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        $arr_categorias = array();

        while($categoria = $stmt->fetchObject()){
            $arr_categorias[] = $categoria;
        }
        return $arr_categorias;

    }

    public function show($id)
    {

    }

    public function create()
    {

    }

    /**Metodo que inser uma categoria no MySQL */
    public function store($dados_categoria)
    {
        $sql = "INSERT INTO categoria(descricao) VALUES (?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $dados_categoria['descricao']);
        $stmt->execute();
    }

    public function update($dados_categoria)
    {

    }

    public function delete($id)
    {

    }
}