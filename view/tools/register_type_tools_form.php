<div class="container-form">

  <h3>Registrar Tipo de Herramienta</h3>


  <form action="index.php?controller=tools&action=saveTypeTool" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="name">Nombre</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="">
      </div>
    </div>

    <br>
    <div class="row">
      <input type="submit" value="Guardar">
    </div>
  </form>

</div>