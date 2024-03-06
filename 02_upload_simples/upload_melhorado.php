<?php 

try {
    //defininod diretório de destino
    $dir_destino = "files/";
    //verificando se diretorio de destino existe
    if(!is_dir($dir_destino))
        throw new Exception('Diretório não encontrado.');
    //verifica se o arquivo é executavel
    if(is_executable($_FILES["arquivo_up"]["tmp_name"]))
        throw new Exception("Arquivos executaveis não são permitidos");
    //obtendo a extensao do arquivo
    $ext_arquivo = pathinfo($_FILES["arquivo_up"]["name"], PATHINFO_EXTENSION);
    //enviadoas5dsf4ad5f.gif
    $nome_unico = uniqid("enviado") . "." . $ext_arquivo;
    //caminho do novo arquivo do servidor
    $nome_arquivo_servidor = $dir_destino . $nome_unico;
    //movendo arquivo temporario para o arquivo final
   if(move_uploaded_file($_FILES["arquivo_up"]["tmp_name"],  $nome_arquivo_servidor))
        echo "Arquivo enviado com sucesso!";
    else throw new Exception("Erro ao enviar. Erro: " .$_FILES["arquivo_up"]["error"]);

} catch (Exception $e) {
    echo $e->getMessage();
}