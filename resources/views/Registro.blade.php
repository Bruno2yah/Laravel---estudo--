<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('assets/css/style2.css')}}">
</head>
<body class = "d-flex justify-content-center align-items-center flex-column">
@extends ("templates.template")
@section('contente')
    <main class="d-flex w-100 h-100 justify-content-center align-items-center ">
    <div class="col-4 h-75 justify-content-center align-items-center d-flex ">
            <img src="{{url('assets/img/img1.png')}}" class = "img-fluid h-75 w-75"alt="" srcset="">
        </div>
        <div class="col-4 h-75 justify-content-center align-items-center d-flex">
            <div class="justify-content-center w-100 h-100 box d-flex align-items-center p-2">
                <form action="#" method="post" class="flex-column d-flex justify-content-center align-items-center">
                     <div class="row d-flex justify-content-center align-items-center mb-2">
                        <div class="col-6 d-flex justify-content-center flex-column">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="">
                        </div>
                        <div class="col-6 d-flex justify-content-center flex-column">
                            <label for="cpf" class="form-label">CPF &emsp;</label>
                            <input type="text" class="">
                        </div>
                     </div>
                     <div class="row d-flex justify-content-center mb-2">
                         <div class="col-6 d-flex justify-content-center flex-column">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="">
                        </div>
                        <div class="col-6 d-flex justify-content-center flex-column">
                            <label for="modelo" class="form-label">Modelo</label>
                            <input type="text" class="">
                        </div>
                     </div>
                     <div class="row d-flex justify-content-center mb-2">
                        <div class="col-6 d-flex justify-content-center flex-column">
                            <label for="marca" class="form-label">Marca</label>
                            <input type="text" class="">
                        </div>
                        <div class="col-6 d-flex justify-content-center flex-column">
                            <label for="defeito" class="form-label">Defeito</label>
                            <input type="text" class="">
                        </div>
                     </div>
                     <div class="row w-100 d-flex justify-content-center mb-2 " style="padding: 0;">
                        <div class="col-6 d-flex justify-content-center flex-column" style="padding: 0;">
                            <label for="email" class="form-label">Data</label>
                            <input type="date" class="">
                        </div>
                        <div class="col-6 d-flex justify-content-end align-items-end" style="padding: 0;">
                                <button class = "btn btn-outline-primary w-75" type="submit">Login</button>
                        </div>
                     </div>
                </form>
            </div>
        </div>
        <div class="col-4 h-75 justify-content-center align-items-center d-flex ">
            <img src="{{url('assets/img/img2.png')}}" class = "img-fluid h-75 w-75"alt="" srcset="">
        </div>
    </main>
    @endsection
</body>
</html>
