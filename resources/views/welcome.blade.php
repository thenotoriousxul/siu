<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlaces</title>
</head>
<body>
    <h1>Extraordinario Integradora</h1>
    <ul>
        <li>
            <a href="{{ url('/') }}">Página de inicio</a> 
        </li>
        <li>
            <a href="{{ url('/register-employee') }}">Registrar empleado</a> 
        </li>
        <li>
            <a href="{{ url('/register-customer') }}">Registrar cliente</a> 
        </li>
        <li>
            <a href="{{ url('/register-territory') }}">Registrar territorio</a> 
        </li>
        <li>
            <a href="{{ route('orders.create') }}">Crear orden</a>
        </li>
        <li>
            <a href="{{ url('/reporte-ventas') }}">Reporte de ventas</a>
        </li>
    </ul>

    @auth
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
    @else
    <a href="{{ route('login') }}">
        <button>Iniciar sesión</button>
    </a>
    <a href="{{ route('register') }}">
        <button>Registrarse</button>
    </a>
    @endauth
</body>
</html>
