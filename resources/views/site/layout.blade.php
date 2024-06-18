<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @stack('stylaMaterialLize')
    <!-- Compiled and minified JavaScript -->
    
</head>
<body>

    <nav class="red">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo center">ControleFinaceiro</a>
          <ul id="nav-mobile" class="left">
            <li><a href="">Home</a></li>
            <li><a href="">Carrinho</a></li>
          </ul>
        </div>
    </nav>
            

@yield('conteudo')
    
@stack('jsMaterialize')

</body>
</html>