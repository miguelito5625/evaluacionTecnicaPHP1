<!-- <?php echo $_POST['id']; ?> -->

<div class="container-form">

  <h3>Datos de Herramienta</h3>


  <form action="index.php?controller=tools&action=updateTool" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="name">Nombre</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="" value="<?php echo $dataToView["data"]["name"]; ?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="description">Descripción</label>
      </div>
      <div class="col-75">
        <textarea id="description" name="description" placeholder="" style="height:200px"><?php echo $dataToView["data"]["description"]; ?></textarea>
      </div>
    </div>
    <br>
    <input type="hidden" id="id" name="id" value="<?php echo $dataToView["data"]["id"]; ?>">
    <div class="row">
      <input type="submit" value="Guardar">
    </div>
  </form>

</div>