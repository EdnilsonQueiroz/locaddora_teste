<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Locadora de Veiculos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     
    </head>
<body>
   <div class="container">
    @component('layouts.navbar') 
    @endcomponent
    <main role="main">
        @hasSection ('conteudo')
            @yield('conteudo')
        @endif
    </main>
   </div>     
    
</body>
</html>