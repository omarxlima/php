<?php 


try {
    //data source name, onde o php vai encontrar o banco de dados
    $dsn = "mysql:host=localhost;dbname=test";
    
    //PHP Data Object
    
    $conexao = new PDO($dsn, "root", "");
    // var_dump($conexao);
    //statement
    $stmt = $conexao->prepare("SELECT * FROM funcionarios");
    $stmt->execute();
    
} catch (Exception $e) {
    echo $e->getMessage();
    echo "<hr/>";
    var_dump($e->getTrace());
}

?>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Nome:</th>
            <th>Idade:</th>
        </tr>
    </thead>
    <tbody>
        <?php while($funcionario = $stmt->fetchObject()): ?>
        <tr>
            <td><?= $funcionario->id?></td>
            <td><?= $funcionario->nome?></td>
            <td><?= $funcionario->idade?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>