@extends('layouts.main')

@section('title', 'E-commerce | Kingdom')
@section('content')
<div class="galery">

</div>
<main>
    <p>Produtos</p>

    <div id="show-box">
    
            @foreach($products as $product)
                <?php
                    $priceproduct = $product->price;
                    
                    $newPrice = Str::replace('.',',',$priceproduct)
                ?>
                <a href="#">
                    <div class="card-container">
                        <p>{{$product->name}}</p>
                        <img src="images/products/{{$product->image}}" width="250px" height="200px"alt="{{$product->name}}">
                        <h5>{{$product->description}}</h5>
                        <div class="price">
                             R$ {{$newPrice}}
                        </div>
                    </div>
                </a>
            @endforeach
    </div>
</main>

       



@endsection