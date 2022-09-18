<div style="margin-bottom: 30px">


    <table id="idTableTools" class="display nowrap" style="width:100%;">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

            <?php
            if (count($dataToView["data"]) > 0) {
                foreach ($dataToView["data"] as $mechanic) {
            ?>

                    <tr>
                        <td><?php echo $mechanic['id']; ?></td>
                        <td><?php echo $mechanic['name']; ?></td>
                        <td><?php echo $mechanic['description']; ?></td>
                        <td><?php echo $mechanic['state']; ?></td>
                        <td> </td>
                    </tr>

            <?php
                }
            }
            ?>

        </tbody>
    </table>


</div>

<script>
    $.extend($.fn.dataTable.defaults, {
        responsive: true
    });

    $(document).ready(function() {
        var table = $('#idTableTools').DataTable({
            language: {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
            columnDefs: [{
                targets: -1,
                data: null,
                defaultContent: '<button id="idAccion1">Click!</button> <button id="idAccion2">Click!</button>',
            }, ],
        });

        $('#idTableTools tbody').on('click', '#idAccion1', function() {
            var data = table.row($(this).parents('tr')).data();
            // alert(data[0] + "'s salary is: " + data[2]);
            window.location.href = "index.php?controller=tools&action=showMechanicHaveTool&toolid=" + data[0];
        });

        $('#idTableTools tbody').on('click', '#idAccion2', function() {
            var data = table.row($(this).parents('tr')).data();
            // alert(data[0] + "'s salary is: " + data[2]);
            alert("Accion 2");
        });

    });
</script>