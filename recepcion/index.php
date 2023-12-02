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
    <link rel="stylesheet" href="style.css">

    <title>CMP - Recepcion</title>
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
        <div class="centrado">
            <h1>RECEPCION</h1>
            <a onclick="agregarcliente()" id="btnAgregar" href="#" class="myButton">
                AGREGAR PACIENTES
            </a>

            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Documento</th>
                        <th>Historia Clínica</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Juan</td>
                        <td>Godoy</td>
                        <td>123456789</td>
                        <td>Dolor de panza</td>
                        <td>Accion</td>
                    </tr>

                    <tr>
                        <td>Josefa</td>
                        <td>Gomez</td>
                        <td>11223344</td>
                        <td>Dolor de pie derecho</td>
                        <td>Accion</td>
                    </tr>

                    <tr>
                        <td>Jose</td>
                        <td>Gimenez</td>
                        <td>12354334</td>
                        <td>Descompostura</td>
                        <td>Accion</td>
                    </tr>

                    <tr>
                        <td>Patricia</td>
                        <td>Herrera</td>
                        <td>23463344</td>
                        <td>Fatiga muscular</td>
                        <td>Accion</td>
                    </tr>

                    <tr>
                        <td>Gaston</td>
                        <td>Gastonero</td>
                        <td>43233242</td>
                        <td>Dolor de espalda</td>
                        <td>Accion</td>
                    </tr>

                    <tr>
                        <td>Giovanni</td>
                        <td>Scellato</td>
                        <td>32434544</td>
                        <td>Exceso de facha</td>
                        <td>Accion</td>
                    </tr>
                </tbody>
            </table>


            <div id="modal" class="modale" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-header">
                        <h2>DATOS DEL PACIENTE</h2>
                        <a onclick="cerrarModal()" href="#" class="btn-close closemodale" aria-hidden="true">&times;</a>
                    </div>
                    <div class="modal-body">
                        <form onsubmit="guardarCliente(event)">
                            <input type="text" id="modalFirstName" placeholder="Nombre" size="20" required><br>
                            <input type="text" id="modalLastName" placeholder="Apellido" size="20" required><br>
                            <input type="text" id="modaldoc" placeholder="doc" size="20" required><br>
                            <input type="text" id="modalHistoria" placeholder="Historia Clínica" size="20" required><br>
                            <!-- despliega especialidades en modal... -->
                            <br>
                            <select id="modalEspecialidad" required>
                                <option value="cirugia">Cirugía</option>
                                <option value="pediatria">Pediatría</option>
                                <option value="odontologia">Odontología</option>
                                <option value="traumatologia">Traumatología</option>
                            </select>
                        </br>
                        <br>
                            <input type="submit" value="Guardar">
                        </br>    
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!-- Aquí puedes agregar más elementos según sea necesario -->
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script></script>
</body>
</html>