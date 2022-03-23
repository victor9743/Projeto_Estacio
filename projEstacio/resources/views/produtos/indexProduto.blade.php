<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>produto</th>
                <th>validade</th>
                <th>Cod. Barras</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $prod )
                <tr>
                    <td>{{ $prod->nomeproduto }}</td>
                    <td>{{ $prod->dtavalidade }}</td>
                    <td>{{ $prod->codbarras }}</td>
                    <td>{{ $prod->tipoproduto }}</td>
                    <td><a href="/produto/{{ $prod->id }}">Editar</a></td>
                    <td>
                    <form action="/produto/{{ $prod->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit">Remover</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>