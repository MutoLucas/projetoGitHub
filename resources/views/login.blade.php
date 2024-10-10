<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Git Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg" style="width: 25rem">
            <div class="card-body">
                <h3 class="card-title text-center">Login</h3>

                @if(Session::get('error'))
                <p class="alert alert-danger text-center">
                    {{ Session::get('error') }}
                </p>
                @endif

                <form action="{{ route('logar') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu melhor email">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
                    </div>

                    <button type="submite" class="btn btn-primary w-100">Entrar</button>
                </form>
                <div class="text-center mt-3">
                    <a href="{{ route('cadastro') }}">Não tem conta? Cadastre-se</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
