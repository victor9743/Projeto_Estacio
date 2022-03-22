<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/produtos/save" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id_produto" id="id_produto" value=0>
        <input type="text" name="produto" id="produto">
        <input type="text" name="validade" id="validade">
        <input type="text" name="codbarras" id="codbarras">
        <input type="text" name="tipo" id="tipo">

        <input type="submit" value="Salvar">
    </form>
</body>
</html>