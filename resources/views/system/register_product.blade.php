
@extends('layouts.main_system')

@section('title','Product | Kingdom')

@section('content')
<link rel="stylesheet" href="/css/system/form.css">
<main>
   <form name="form" action="/product_form" method="POST">
       @csrf
    <fieldset>
        <label for="name">Nome do produto:</label>
        <input type="text" name="name">
        <label for="quantity">Quantidade de produtos:</label>
        <input type="number" name="quantity">
        <label for="price">Valor do produto:</label>
        <input type="number" name="price">
        <label for="image">Nome da imagem:</label>
        <input type="text" id="img" name="image">
        <label for="description">Descrição:</label>
        <input type="textarea" name="description">
    
        <input type="submit" name="enviar" class="button" value="Send"> 
    <fieldset>    
   </form>
</main>
@endsection