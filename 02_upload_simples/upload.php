<?php 

try {
    //defininod diretório de destino
    $dir_destino = "files/";
    //verificando se diretorio de destino existe
    if(!is_dir($dir_destino))
        throw new Exception('Diretório não encontrado.');
    // var_dump($_FILES);
    //caminho do novo arquivo do servidor
    $nome_arquivo_servidor = $dir_destino . "enviado.gif";
    //movendo arquivo temporario para o arquivo final
   if(move_uploaded_file($_FILES["arquivo_up"]["tmp_name"],  $nome_arquivo_servidor))
        echo "Arquivo enviado com sucesso!";
    else throw new Exception("Erro ao enviar. Erro: " .$_FILES["arquivo_up"]["error"]);

} catch (Exception $e) {
    echo $e->getMessage();
}