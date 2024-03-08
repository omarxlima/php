<?php 

try {
    include 'DAO/CategoriaDAO.php';
    $categoria_dao = new CategoriaDAO();

    $listar_categorias = $categoria_dao->index();
    $total_categorias = count($listar_categorias);
    
} catch (Exception $e) {
    echo $e->getMessage();
  
}

?>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Nome:</th>
        </tr>
    </thead>
    <tbody>
        <?php for($i=0; $i <$total_categorias; $i++ ): ?>
        <tr>
            <td><?= $listar_categorias[$i]->id?></td>
            <td><?= $listar_categorias[$i]->descricao?></td>
        </tr>
        <?php endfor ?>
    </tbody>
</table>