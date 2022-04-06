@extends('produtos.layout.main')
@section('title', 'novo produto')
@section('content')

<div id="produtoTable">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>produto</th>
                <th>validade</th>
                <th>Cod. Barras</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $prod )
                <tr>
                    <td>{{ $prod->id }}</td>
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
<div>
    <!-- <a href="{{'/produtos/new'}}" type="button"></a> -->
<button id="telaCadastro">Cadastrar</button>
@endsection
<script src="js/jquery.js" type="text/javascript"></script>
 

<script>
	$(function () {
        $("#dtavalidade","#cadProduto").mask("99/99/9999");
        $("#telaCadastro").click(function() {
            var div = "#cadProduto";
            if ($(div).length > 0) $(div).remove();
            $('body').append(
                '<div id="cadProduto">' +
                '<div>'+
                    '<input type="hidden" id="id">' +
                    '<label>Data</label><br>' +
                    '<input type="text" class="form-control form-control-sm" id="dtavalidade" placeholder="dd/mm/aaaa">' +
                '</div>'+
                '<div>'+
                    '<label>Cod. Barras</label><br>' +
                    '<input type="text" class="form-control form-control-sm" id="codbarras"'+
                '</div>'+
                '<div>'+
                    '<label>Descrição</label><br>' +
                    '<input type="text" class="form-control form-control-sm" id="Descricao" placeholder="">'+
                '</div>'+
                
            '</div>');
            
            $(div).dialog({
                modal: true,
                resizable: false,
                width: 400,
                title: 'Cadastro de Produtos',
                buttons: [
                    { id: 'detBtnRemover', title: 'Remover', icon: 'ui-icon-trash', click: teste },
                    { id: 'detBtnFechar',title: 'Fechar', icon: 'ui-icon-close' },
                    { id: 'detBtnSalvar',title: 'Salvar', icon: 'ui-icon-check' }
                ]
            });
           
        });
    
	});
    function teste() {
        alert("teste");
    }
</script>