<div class="container-form">

    <h3>Asignar herramienta a mecanico</h3>


    <form action="index.php?controller=tools&action=saveMechanicTools" method="POST">
        <div class="row">
            <div class="col-25">
                <label for="mechanic_id">Mecánico</label>
            </div>
            <div class="col-75">
                <select id="idSelectMecanich" name="mechanic_id" class="selectInput">
                    <?php
                    if (count($dataToView["data"]["mechanics"]) > 0) {
                        foreach ($dataToView["data"]["mechanics"] as $mechanic) {
                    ?>
                            <option value="<?php echo $mechanic['id']; ?>"><?php echo $mechanic['firstname']; ?> <?php echo $mechanic['lastname']; ?></option>

                    <?php
                        }
                    }
                    ?>


                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="tool_id">Herramienta</label>
            </div>
            <div class="col-75">
                <select id="idSelectTool" name="tool_id" class="selectInput">
                    <?php
                    if (count($dataToView["data"]["tools"]) > 0) {
                        foreach ($dataToView["data"]["tools"] as $tool) {
                    ?>
                            <option value="<?php echo $tool['id']; ?>"><?php echo $tool['name']; ?></option>

                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <input type="submit" value="Guardar">
        </div>
    </form>

</div>


<script>
    $(document).ready(function() {
        $('#idSelectMecanich').select2();
        $('#idSelectTool').select2();
    });
</script>