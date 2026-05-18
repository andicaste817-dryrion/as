<h2>Registrar nuevo cliente</h2>

<form action="../controlador/cliente_controller.php?accion=registrar" method ="POST">
    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>DUI:</label>
    <input type="text" name="dui" required>

    <label>Dirección:</label>
    <input type="text" name="direccion">

    <label>Correo:</label>
    <input type="email" name="correo">

    <label>Teléfono:</label>
    <input type="text" name="telefono">

    <button type="submit">Guardar</button>
</form>
