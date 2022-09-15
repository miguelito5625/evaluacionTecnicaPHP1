<div class="container-form">

  <h3>Registrar Mecanico</h3>


  <form action="index.php?controller=mechanics&action=save" method="POST">


    <div class="row">
      <div class="col-25">
        <label for="fname">Nombres</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="">
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="fname">Apellidos</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="">
      </div>
    </div>



    <br>
    <div class="row">
      <input type="submit" value="Guardar">
    </div>
  </form>

</div>
