<?php require_once('header.php'); ?>

<body>

    <section id="main-section">
    <!-- Contenido de la página principal -->
    <h2>Propietarios</h2>
    <div class="search-container">  
        <button id="search-button">Nuevo propietario +</button>          
        <input type="text" id="search-input" placeholder="Buscar...">
        <button id="search-button">Buscar</button>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Placa vehiculo</th>
                    <th>Rol</th>
                    <th>Opciones</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1006319573</td>
                    <td>Yeferson</td>
                    <td>Tello Arias</td>                    
                    <td>3126059025</td>
                    <td>ZQE49E</td>
                    <td>Estudiante</td>
                    <td> <button type="button" class="btn btn-warning">Actualizar</button> | <button type="button" class="btn btn-danger">Eliminar</button>  </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Contenido adicional (formularios, historiales, etc.) se puede agregar aquí -->
</section>


</body>
<?php require_once('footer.php'); ?> 