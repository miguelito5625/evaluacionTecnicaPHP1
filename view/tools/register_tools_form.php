<div class="container-form">

  <h3>Registrar Herramienta</h3>


  <form action="index.php?controller=tools&action=save" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="nametool">Nombre</label>
      </div>
      <div class="col-75">
        <input type="text" id="nametool" name="nametool" placeholder="">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="descriptiontool">Descripción</label>
      </div>
      <div class="col-75">
        <textarea id="descriptiontool" name="descriptiontool" placeholder="" style="height:200px"></textarea>
      </div>
    </div>
    <br>
    <div class="row">
      <input type="submit" value="Guardar">
    </div>
  </form>

</div>