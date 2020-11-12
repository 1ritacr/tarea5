<?php
require_once('conexion.php');
   // empezamos CRUD
$sql = "select * from usuarios";
$result =  $conn->query($sql);
$usuarios = array();
while ($fila =  $result->fetch_array()) {
    $usuarios[] = $fila;
}
require_once('cabe.php');
?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<h1>usuarios</h1>
			<p>
                    <a href="usuarios_editar.php" class="btn btn-success">Nuevo</a>
                </p>     
                <table class="table table-striped">
                    <tr>
                        <th>id</th>
                        <th>usuario</th>
                        <th>password</th>
                        <th></th>
                    </tr>
                    <?php foreach ($usuarios as $item): ?>
                    <tr>
                        <td><?= $item['id']?></td>
                        <td><?= $item['usuario']?></td>
                        <td><?= $item['password']?></td>
                        <td>
                            <a href="#" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </table>
   
		</div>
	</div>
</div>

<?php
require_once('pie.php');
?>