<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet"> 

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/css/global.css">
        <link rel="stylesheet" href="/css/styles.css">

        <title>@yield('title')</title>

    </head>
    <body>

       <header>
            <div id="container">
                <h1 class="logo">
                    <a href="">
                        KingDom
                    </a> 
                </h1>

                <form action="">
                    <input class="search"type="text" placeholder="Pesquisar">
                </form>
                <div class="access">
                    <span><a href=""> Login </a><span> | <span><a href=""> Cadastre-se </a></span>
                </div>
                <div class="cart">
                    <img src="/images/cart.png" alt="">                
                    <h4>Meu Carrinho</h4>                
                </div>
            </div>
       </header>
      
            @yield('content')
      
       <footer>
            <h5>Todos os direitos reservados | Kingdom</h5>
       </footer>

    </body>
</html>
