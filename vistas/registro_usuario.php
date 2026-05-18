<div class="d-flex justify-content-between mb-4">
    <h3 class="title">Registrar nuevo cliente</h3>
    <div>
        <a href="index.php?m=dashboard" class="btn btn-primary">Volver</a>
        <a href="index.php?m=logout" class="btn btn-danger">Salir</a>
    </div>
</div>

<div class="card shadow-soft p-4">
<form action="index.php?m=registrar" method="POST">
    <div class="mb-3">
    <label class="form-label">Nombre:</label>
    <input type="text" name="nombre" class="form-control" required></div>

    <div class="mb-3">
    <label class="form-label">DUI:</label>
    <input type="text" name="dui" class="form-control" required>
    </div>

    <div class="mb-3">
    <label class="form-label">Dirección:</label>
    <input type="text" name="direccion" class="form-control">
    </div>

    <div class="mb-3">
    <label class="form-label">Correo:</label>
    <input type="email" name="correo" class="form-control">
    </div>

    <div class="mb-3">
    <label class="form-label">Teléfono:</label>
    <input type="text" name="telefono" class="form-control">
    </div>

    <button type="submit" class="btn btn-success w-100">Guardar</button>
</form>
</div>
