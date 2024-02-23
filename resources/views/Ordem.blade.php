<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opa</title>
    <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
</head>
<body class = "d-flex justify-content-center align-items-center">
    <main class="d-flex w-100 h-100 justify-content-center align-items-center ">
        <div class="col-6 h-75 justify-content-center align-items-center d-flex ">
            <img src="{{url('assets/img/Fukurokumaru.PNG.png')}}" class = "img-fluid h-75 w-75"alt="" srcset="">
        </div>
        <div class="col-6 h-75 justify-content-center align-items-center d-flex">
            <div class="justify-content-center w-50 h-75 box d-flex align-items-center">
                <form action="#" method="post" class="flex-column d-flex">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class=" mb-2">
                    <label for="senha">Senha</label>
                    <input type="password" class=" mb-4" >
                    <div class="justify-content-end d-flex">
                        <button class = "btn btn-outline-warning mb-4" type="submit">Login</button>
                    </div>
                    <p>Ainda não registrado?<a href="http://"> Registrar-se</a></p>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
