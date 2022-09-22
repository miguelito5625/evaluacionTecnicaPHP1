<div style="margin-bottom: 30px">


    <table id="idTableTools" class="display nowrap" style="width:100%;">
        <thead>
            <tr>
            <th>id</th>
            <th>No.</th>
            <th>Nombre</th>
            <th>Existencia</th>
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
                    <td><?php echo $mechanic['rowNumber']; ?></td>
                    <td><?php echo $mechanic['name']; ?></td>
                    <td><?php echo $mechanic['existence']; ?></td>
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
            columnDefs: [
                {
                targets: -1,
                data: null,
                defaultContent: '<button id="idAccion1">Editar</button> ',
            }, 
            {
                target: 0,
                visible: false,
                searchable: false,
            },
        ],
        });

        $('#idTableTools tbody').on('click', '#idAccion1', function() {
            var data = table.row($(this).parents('tr')).data();
            window.location.href = "index.php?controller=tools&action=pageEditTool&toolid=" + data[0];
        });

    });
</script>