<?php
require_once('conexion.php');
   // empezamos CRUD
$sql = "select * from categorias";
$result =  $conn->query($sql);
$categorias = array();
while ($fila =  $result->fetch_array()) {
    $categorias[] = $fila;
}
require_once('cabe.php');
?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<h1>categorias</h1>
			<p>
                    <a href="categorias_editar.php" class="btn btn-success">Nuevo</a>
                </p>     
                <table class="table table-striped">
                    <tr>
                        <th>id</th>
                        <th>descripcion</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach ($categorias as $item): ?>
                    <tr>
                        <td><?= $item['id']?></td>
                        <td><?= $item['descripcion']?></td>
                      
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