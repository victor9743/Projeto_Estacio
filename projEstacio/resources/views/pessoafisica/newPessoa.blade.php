@extends('layout.main')
@section('title', 'novo produto')
@section('content')

    <form action="/produtos" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" id="id" value="<?php echo isset($produto) ? $produto->id : '' ?>">
        <input type="text" name="nomeproduto" id="nomeproduto" value="<?php echo isset($produto) ? $produto->nomeproduto : '' ?>">
        <input type="text" name="dtavalidade" id="dtavalidade" value="<?php echo isset($produto) ? $produto->dtavalidade : '' ?>">
        <input type="text" name="codbarras" id="codbarras" value="<?php echo isset($produto) ? $produto->codbarras : '' ?>">
        <input type="text" name="tipoproduto" id="tipoproduto" value="<?php echo isset($produto) ? $produto->tipoproduto : '' ?>">

        <input type="submit" value="Salvar">
    </form>
  
@endsection