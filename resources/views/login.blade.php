<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/login.css" />
    <title>Login</title>
</head>
<body>
    <div class="row m-0 h-100">
        <div class="col p-0 text-center d-flex justify-content-center align-items-center display-none">
            <img src="/images/login.svg" class="w-100">
        </div>
        <div class="col p-0 bg-custom d-flex justify-content-center align-items-center flex-column w-100">
            <form class="w-75" action="#">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">E-mail:</label>
                    <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="email" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Senha:</label>
                    <input name="password" type="password" class="form-control" id="exampleFormControlInput2" placeholder="senha" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                lembrar
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-custom btn-lg btn-block mt-3">Entrar</button>
                <a href="{{route('login.facebook')}}" class="btn btn-primary btn-lg btn-block mt-3">Facebook</a>
            </form>
        </div>
    </div>
</body>
</html>