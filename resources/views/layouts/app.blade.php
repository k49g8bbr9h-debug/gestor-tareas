<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Tareas</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; background: #f5f5f5; color: #333; }
        header { background: #2d6a4f; color: white; padding: 16px 32px; }
        header h1 { font-size: 24px; }
        .container { max-width: 900px; margin: 32px auto; padding: 0 16px; }
        .alert-success { background: #d4edda; color: #155724; padding: 12px 16px; border-radius: 6px; margin-bottom: 20px; }
        .alert-error { background: #f8d7da; color: #721c24; padding: 12px 16px; border-radius: 6px; margin-bottom: 20px; }
        .btn { display: inline-block; padding: 8px 16px; border-radius: 4px; text-decoration: none; font-size: 14px; cursor: pointer; border: none; }
        .btn-primary { background: #2d6a4f; color: white; }
        .btn-warning { background: #f0a500; color: white; }
        .btn-danger { background: #c0392b; color: white; }
        .btn-secondary { background: #6c757d; color: white; }
    </style>
</head>
<body>
    <header>
        <h1>Mis Tareas</h1>
    </header>

    <div class="container">
        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert-error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>