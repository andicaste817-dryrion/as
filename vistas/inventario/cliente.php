<h4 class="title mb-3">cliente</h4>

<div class="d-flex justify-content-between mb-3">
    <div>
        <a href="index.php?m=listar" class="btn btn-primary">Volver</a>
        <a href="index.php?m=registrar" class="btn btn-success">Registrar cliente</a>
    </div>
    <a href="index.php?m=logout" class="btn btn-danger">Salir</a>
</div>

<div class="card shadow-soft p-3">
<table class="table table-bordered align-middle">
<thead>
<tr>
    <th>Nombre</th>
    <th>Dui</th>
    <th>Direccion</th>
    <th>Correo</th>
    <th>Telefono</th>
</tr>
</thead>
<tbody>
<?php while($r = mysqli_fetch_assoc($datos)){ ?>
<tr>
    <td><?= $r['nombre'] ?></td>
    <td><?= $r['dui'] ?></td>
    <td><?= $r['direccion'] ?></td>
    <td><?= $r['correo'] ?></td>
    <td><?= $r['telefono'] ?></td>
</tr>
</tbody><?php } ?>
</table>
</div>