<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <nav>
        <div>
            
            
        <div class="nav-item" style="display:flex; gap: 20px;">
            <h1>Prestamo de libros</h1>
            @if(auth()->check())
            Usuario: {{  auth()->user()->name }}
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            @else
            <a class="nav-link" href="{{ route('login') }}">Login</a>
            @endif
            <div>
            <a class="nav-link" href="{{ route('libros.create') }}">Crear libro</a>
            </div>
            <div>
            <a class="nav-link" href="{{ route('socios.index') }}">Lista de socios</a>
            </div>
        </div>
        
            
        </div>
        
    </nav>
    @yield('contenido')
</body>
</html>