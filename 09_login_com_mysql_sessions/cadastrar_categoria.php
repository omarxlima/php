<?php
session_start();

if(!isset($_SESSION["usuario_logado"]))
    header("location: login.php");

try {
   if(isset($_GET['salvar']))
   {
    include 'DAO/CategoriaDAO.php';
    $categoria_dao = new CategoriaDAO();

    $dados_para_inserir = array(
        'descricao' => $_POST["descricao"],
    );

    $categoria_dao->store($dados_para_inserir);
    echo "cadastrado com sucesso!";

   }
} catch (Exception $e) {
    echo $e->getMessage();
}

?>


<html lang="pt-br">
    <head>
        <title>Categoria</title>
        <meta charset="utf8" />
    </head>
    <body>
        <div id="global">
            <header>
                <h1>CADASTRO DE CATEGORIA</h1>
            </header>
            <main>
                <form method="post" action="cadastrar_categoria.php?salvar=true">
                    
                    <label>Cadastra novo produto:
                        <input name="descricao" type="text" />
                    </label>

                  
                    <button type="submit">Cadatrar</button>
                </form>
            </main>
            <footer>
            </footer>
        </div>
    </body>
</html>