<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" text-type="text/css" href="{{url('assets/css/styleTemp.css')}}">
        <title> Galeria </title>
    </head>

    <body>
  
        <nav class="nav row w-100 d-flex justify-content-center align-items-center">
            <div class="col-4 d-flex justify-content-center align-items-center gap-5">
                <a href="/"> Home </a>
                <a href="#"> Registro </a>        
            </div>    
        </nav> 

       
        @yield('contente')
        <!-- <footer class="rodape d-flex row w-100">
            <div class="box-text col-6 d-flex flex-column justify-content-center align-items-center">
                <h3> Sobre Nós </h3> 
                <p> Saiba um pouco mais sobre nós</p>
            </div>

            <div class="boxText col-6 d-flex flex-column justify-content-center align-items-center">
                <h3> Contato </h3> 
                <p> Tel: (11) 12342-2444 </p>
                <p> Tel: (11) 92332-0988 </p>
            </div> 
        </footer> -->

    </body>
</html>