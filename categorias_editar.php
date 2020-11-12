<?php 
require_once('cabe.php');
?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Nuevo categorias</h1>        
                <form action="categorias_procesa.php" method="post">
                  <div class="form-group">
                    <label for="">id</label>
                    <input type="text" name="id" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="">descripcion</label>
                    <input type="text" name="descripcion" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </form>                
            </div>
        </div>
      </div>
<?php 
require_once('pie.php');
 ?>