@extends('produtos.layout.main')
@section('title', 'novo produto')
@section('content')

    <form action="/produtos" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" id="id" value="<?php echo isset($produto) ? $produto->id : ''?>">
        <input type="text" name="nomeproduto" id="nomeproduto" value="<?php echo isset($produto) ? $produto->nomeproduto : ''?>">
        <input type="text" name="dtavalidade" id="dtavalidade" value="<?php echo isset($produto) ? $produto->dtavalidade : ''?>">
        <input type="text" name="codbarras" id="codbarras" value="<?php echo isset($produto) ? $produto->codbarras : ''?>">
        <input type="text" name="tipoproduto" id="tipoproduto" value="<?php echo isset($produto) ? $produto->tipoproduto : ''?>">

        <input type="submit" value="Salvar">
    </form>
    <div id="dialog" title="Basic dialog">
        <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the &apos;x&apos; icon.</p>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$( function() {
    $("#dialog").dialog();
  } );
    
</script>