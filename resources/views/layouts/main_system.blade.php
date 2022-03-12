<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 
        
    <link rel="stylesheet" href="/css/system/global.css">
    <link rel="stylesheet" href="/css/system/styles.css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <a href="/begin">
                    <li>
                        Inicio
                    </li>
                </a>
                <a href="">
                    <li>
                        Adiminstrador
                    </li>
                </a>
                <a href="">
                    <li>
                        Cliente
                    </li>
                </a>
                <a href="/product">
                    <li>
                        Produto
                    </li>
                </a>
                <a href="">
                    <li>
                        Ajuda
                    </li>
                </a>
                <a href="/">
                    <li>
                        Sair
                    </li>
                </a>
            </ul>
        </nav>
    </header>  
    <div class="container">  
       @yield('content')
    </div>
    
</body>
</html>