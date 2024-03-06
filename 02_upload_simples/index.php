<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload simples de arquivos</title>
</head>
<body>
    <div id="global">
        <header>
            <h1>Upload simples de arquivos</h1>
        </header>
        <main>
            <form action="upload_melhorado.php" method="post" enctype="multipart/form-data">
                <label for="nome">Arquivo:</label>
                <input type="file" name="arquivo_up" id="">
                <button type="submit">enviar</button>
            </form>
        </main>
    </div>
</body>
</html>