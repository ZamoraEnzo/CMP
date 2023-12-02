<!DOCTYPE html>
<html lang="es-ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poltawski+Nowy&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    
    
    <link rel="stylesheet" href="../style.css">

    <title>CMP - Inicio</title>
</head>



<body>
    <header>
        <div class="arriba">
            <div>
                <a href="../index.php"><img class="logo" src="../src/logos/logo.jpg" alt="" /></a>
            </div>

            <div>
                <nav>
                    <a>Opcion 1</a>
                    <a>Opcion 2</a>
                    <a>Opcion 3</a>
                </nav>
            </div>

            <div>
                <a>derecha</a>
            </div>
        </div>

        <div class="abajo" style="display: none">
            <subnav>
                <a class="sel">CIRUGIA</a>
                <a>PEDIATRIA</a>
                <a>ODONTOLOGIA</a>
                <a>TRAUMATOLOGIA</a>
            </subnav>
        </div>
    </header>

    <main>
        <div class="fondo-opaco pantalla-completa"></div>
        <div class="box-centrado">
            <!-- ingreso al sistema -->
            <form class="panel-sesion">
                <h5 class="centrado">Iniciar Sesión</h5><br>
                <label for="username">Usuario:</label> <input type="text" id="username"><br>
                <label for="password">Contraseña:</label> <input type="password" id="password"><br><br>
                <div class="centrado"><button class="btn fondo-azul" onclick="verificarCredenciales()">Iniciar Sesión</button></div>
            </form>
        </div>
    </main>

    <script></script>
</body>
</html>