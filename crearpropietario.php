
<?php  require_once('header.php'); ?>
<body>

    <div class="form-container">
        <div class="form-column">
            <div class="form-group">
                <label for="input1">Nombres</label>
                <input type="text" id="input1" name="input1" placeholder="Ingrese sus nombres">
            </div>
            
            <div class="form-group">
                <label for="input2">Apellidos</label>
                <input type="text" id="input2" name="input2" placeholder="Ingrese sus apellidos">
            </div>    
        </div>
        <div class="form-column">
            <div class="form-group">
                <label for="input3">Identificacion</label>
                <input type="text" id="input3" name="input3" placeholder="Ingrese su cedula,tarjeta de identidad, etc..">
            </div>
            <div class="form-group">
                <label for="input4">Telefono</label>
                <input type="text" id="input4" name="input4" placeholder="Ingrese su número de teléfono o celular">
            </div>
        </div>
        <div class="form-column">
            <div class="form-group">
                <label for="input5">Placa del vehiculo</label>
                <input type="text" id="input5" name="input5" placeholder="Ingrese la placa del vehículo">
            </div>
            <div class="form-group">
                <label for="input6">Rol</label>
                <select id="input6" name="input6">
                    <option value="">Seleccione un rol...</option> <!-- Opción predeterminada -->
                    <option value="Estudiante">Estudiante</option>
                    <option value="Administrativo">Administrativo</option>
                    <option value="Docente">Docente</option>
                    <option value="Trabajador">Trabajador</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-container-buttons">
        <div class="form-column">

            <button type="button" class="btn btn-success">Registrar</button> <!-- Botón al final de la primera columna -->
    
        </div>
    </div>
</body>
