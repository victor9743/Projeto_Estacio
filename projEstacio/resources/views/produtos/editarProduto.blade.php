<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="row" action="/update/{{$valor_edit->id}}" method="POST" enctype="multipart/form-data">    
        @csrf
        @method('PUT')
        
    </form>

</body>
</html>