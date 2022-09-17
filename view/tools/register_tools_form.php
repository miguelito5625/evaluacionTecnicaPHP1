<div class="container-form">

  <h3>Registrar Herramienta</h3>


  <form action="index.php?controller=tools&action=save" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="name">Nombre</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="description">Descripción</label>
      </div>
      <div class="col-75">
        <textarea id="description" name="description" placeholder="" style="height:200px"></textarea>
      </div>
    </div>
    <br>
    <div class="row">
      <input type="submit" value="Guardar">
    </div>
  </form>

</div>